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

    public function title($content) {

        $tag = new Elemento([
            'tag' => 'title',
            'content' => $content
        ]);

        return $tag->getElement();

    }

    public function hr () {

        $tag = new Elemento([
            'tag' => 'hr',
            'self' => true
        ]);
        
        return $tag->getElement();

    }

    public function meta(array $attrs) {

        $tag = new Elemento([
            'tag' => 'meta',
            'attrs' => $attrs,
            'self' => true
        ]);
        
        return $tag->getElement();

    }

    public function img(array $attrs) {

        $tag = new Elemento([
            'tag' => 'img',
            'attrs' => $attrs,
            'self' => true
        ]);
        
        return $tag->getElement();

    }

    public function link(array $attrs) {

        $tag = new Elemento([
            'tag' => 'link',
            'attrs' => $attrs,
            'self' => true
        ]);
        
        return $tag->getElement();

    }

    public function header ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'header',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'header',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function h1 ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'h1',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'h1',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function h2 ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'h2',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'h2',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function nav ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'nav',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'nav',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function ul (array $content = [],array $attrs = []) {

        $items = [];

        if (!empty($content)) {
            for($i = 0; $i < count($content); $i++) {
                $li = new Elemento([
                    'tag' => 'li',
                    'content' => $content[$i]
                ]);
                array_push($items,$li->getElement());
            }
        }

        $content = [];
        $content = $items;

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'ul',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'ul',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function a ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'a',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'a',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function main ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'main',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'main',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function section ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'section',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'section',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function footer ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'footer',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'footer',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function div ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'div',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'div',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function span ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'span',
                'content' => $content
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'span',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

    public function head ($content = '') {

        $tag = new Elemento([
            'tag' => 'head',
            'content' => $content
        ]);
        
        return $tag->getElement();

    }

    public function body ($content = '',array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'body',
                'content' => $content,
                'js' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'body',
                'attrs' => $attrs,
                'content' => $content
            ]);

        }
        
        return $tag->getElement();

    }

}