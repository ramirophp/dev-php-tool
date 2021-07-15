<?php

class Etiqueta {

    private string $etiqueta;
    private $etiquetas;

    public function __construct (string $tag) {

        $this->etiquetas = $GLOBALS['a'];

        $this->setTag ($this->es_valida($tag),$tag);
    }

    public function es_valida (string $etiqueta) {

        $es_valida = false;

        for ($i = 0; $i < count($this->etiquetas['data']); $i++) {

            if (htmlspecialchars($etiqueta) === $this->etiquetas['data'][$i]['name']) {

                $es_valida = true;

                break;

            }

        }

        return $es_valida;

    }

    public function setTag (bool $es_valida, string $tag) {

        if ($es_valida) {

            $this->etiqueta = htmlspecialchars($tag);

        } else {

            die('Error: <a href="https://mis.piezas.xyz?api=2">Valid tags list</a>');

        }

    }

    public function getTag () {

        return $this->etiqueta;

    }

}