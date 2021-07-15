<?php

class Atributo {

    private string $atributo;

    private $atributos;

    public function __construct (string $attr) {

        $this->atributos = $GLOBALS['b'];

        $this->setAttr ($this->es_valido($attr),$attr);
    }

    public function es_valido (string $attr) {

        $es_valido = false;

        for ($i = 0; $i < count($this->atributos['data']); $i++) {

            if (htmlspecialchars($attr) === $this->atributos['data'][$i]['name']) {

                $es_valido = true;

                break;

            }

        }

        return $es_valido;

    }

    public function setAttr (bool $es_valido, string $attr) {

        if ($es_valido) {

            $this->atributo = htmlspecialchars($attr);

        } else {

            die('Error: <a href="https://mis.piezas.xyz?api=3">Valid attrs list</a>');

        }

    }

    public function getAttr () {

        return $this->atributo;

    }

}