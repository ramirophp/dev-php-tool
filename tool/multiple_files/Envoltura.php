<?php

class Envoltura {

    public function html ($content = 'hello world.',string $lang = 'es',bool $html = false) {

        $tag = new Elemento([
            'tag' => 'html',
            'attrs' => ['lang' => $lang],
            'content' => $content,
            'js' => true
        ]);
        
        $doc = new Elemento([
            'tag' => '!DOCTYPE',
            'attrs' => ['!' => 'html'],
            'self' => true
        ]);

        echo $doc->getElement();
        echo $tag->getElement();

        if ($html) {

            $doc = new Elemento([
                'tag' => '!DOCTYPE',
                'attrs' => ['!' => 'html'],
                'self' => true
            ]);

            $archivo = fopen('index.html', "w") or die("no se pudo abrir el archivo!");
            fwrite($archivo, $doc->getElement().$tag->getElement());

        }

    }

}