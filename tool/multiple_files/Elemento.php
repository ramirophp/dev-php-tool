<?php

class Elemento {

    private string $elemento;

    public function __construct (array $data) {

        if (array_key_exists('self',$data) && $data['self']) {

            $this->setElemento($this->open($data));

        } else {

            if (array_key_exists('js',$data) && $data['js'] && array_key_exists('content',$data) && array_key_exists('tag',$data)) {

                $this->setElemento($this->open($data).$this->content($data['content'],$data['js']).$this->close($data['tag']));

            } elseif (array_key_exists('content',$data) && array_key_exists('tag',$data)) {

                $this->setElemento($this->open($data).$this->content($data['content'],false).$this->close($data['tag']));

            } elseif (array_key_exists('tag',$data)) {

                $this->setElemento($this->open($data));

            } else {

                die('Error : Tag no definida');

            }

        }

    }

    public function open (array $data) {

        if (array_key_exists('attrs',$data) && array_key_exists('tag',$data)) {

            $etiqueta = new Etiqueta($data['tag']);

            $atributos = new Atributos($data['attrs']);

            return "<{$etiqueta->getTag()}{$atributos->getAttrs()}>";

        } elseif (array_key_exists('tag',$data)) {

            $etiqueta = new Etiqueta($data['tag']);

            return "<{$etiqueta->getTag()}>";

        } else {

            die('Error : tag y attrs sin definir');

        }

    }

    public function content ($content, bool $js) {

        if ($js) {

            if(is_array($content)) {

                $aux = [];

                for($i = 0; $i < count($content); $i++) {

                    array_push($aux,(is_array($content[$i])) ? implode("",$content[$i]) : $content[$i]);

                }

                return implode("",$aux);

            }else{

                return $content;

            }

        }else{

            if(is_array($content)) {

                $aux = [];

                for($i = 0; $i < count($content); $i++) {

                    array_push($aux,(is_array($content[$i])) ? implode("",$content[$i]) : $content[$i]);

                }

                $contenido = implode("",$aux);

            }else{

                $contenido = $content;

            }

            if(strpos($contenido , '<script>') !== false){

                die('script is off for this tag');

            } else {

                return $contenido;

            }

        }


    }

    public function close (string $tag) {

        $etiqueta = new Etiqueta(htmlspecialchars($tag));

        return "</{$etiqueta->getTag()}>";

    }

    public function setElemento (string $element) {

        $this->elemento = $element;

    }

    public function getElement () {

        return $this->elemento;

    }

}