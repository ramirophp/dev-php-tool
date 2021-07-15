<?php

class Atributos {

    private string $atributos;

    public function __construct (array $atributos) {
        $this->setAttrs($this->toString ($atributos));
    }

    public function toString (array $atributos) {

        $attributes = '';

        foreach ($atributos as $key => $value) {

            $key = htmlspecialchars($key);

            $value = htmlspecialchars($value);

            if ($key === '!') {

                $tmpAttrs = explode(' ',$value);

                for($i = 0; $i < count($tmpAttrs); $i++) {

                    $check = new Atributo($tmpAttrs[$i]);

                    $attributes .= ' ' . $check->getAttr();

                }

            } else {

                $check = new Atributo($key);

                $attributes .= ' '.$check->getAttr().'="'.$value.'"';

            }

        }

        return $attributes;

    }

    public function setAttrs (string $attrs) {

        $this->atributos = $attrs;

    }

    public function getAttrs () {

        return $this->atributos;

    }

}