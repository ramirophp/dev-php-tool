<?php

class XYZ {

    public static function doctype () {

        $tag = new Elemento([
            'tag' => '!DOCTYPE',
            'attrs' => ['!' => 'html'],
            'self' => true
        ]);
        
        echo $tag->getElement();

    }

    public static function html (string $lang) {

        $tag = new Elemento([
            'tag' => 'html',
            'attrs' => ['lang' => "$lang"],
            'self' => true
        ]);
        
        echo $tag->getElement();

    }

    public static function _html () {

        $tag = new Elemento([
            'tag' => 'html'
        ]);
        
        echo $tag->close('html');

    }

    public static function head () {

        $tag = new Elemento([
            'tag' => 'head',
            'self' => true
        ]);
        
        echo $tag->getElement();

    }

    public static function _head () {

        $tag = new Elemento([
            'tag' => 'head'
        ]);
        
        echo $tag->close('head');

    }

    public static function title () {

        $tag = new Elemento([
            'tag' => 'title',
            'self' => true
        ]);
        
        echo $tag->getElement();

    }

    public static function _title () {

        $tag = new Elemento([
            'tag' => 'title'
        ]);
        
        echo $tag->close('title');

    }

    public static function meta(array $attrs) {

        $tag = new Elemento([
            'tag' => 'meta',
            'attrs' => $attrs,
            'self' => true
        ]);
        
        echo $tag->getElement();

    }

    public static function body (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'body',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'body',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        
        echo $tag->getElement();

    }

    public static function _body () {

        $tag = new Elemento([
            'tag' => 'body'
        ]);
        
        echo $tag->close('body');

    }

    public static function header (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'header',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'header',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        echo $tag->getElement();

    }

    public static function _header () {

        $tag = new Elemento([
            'tag' => 'header'
        ]);
        
        echo $tag->close('header');

    }

    public static function h1 (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'h1',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'h1',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        echo $tag->getElement();

    }

    public static function _h1 () {

        $tag = new Elemento([
            'tag' => 'h1'
        ]);
        
        echo $tag->close('h1');

    }

    public static function nav (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'nav',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'nav',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        echo $tag->getElement();

    }

    public static function _nav () {

        $tag = new Elemento([
            'tag' => 'nav'
        ]);
        
        echo $tag->close('nav');

    }

    public static function ul (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'ul',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'ul',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        echo $tag->getElement();

    }

    public static function _ul () {

        $tag = new Elemento([
            'tag' => 'ul'
        ]);
        
        echo $tag->close('ul');

    }

    public static function li (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'li',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'li',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        echo $tag->getElement();

    }

    public static function _li () {

        $tag = new Elemento([
            'tag' => 'li'
        ]);
        
        echo $tag->close('li');

    }

    public static function a (array $attrs = []) {

        if(empty($attrs)) {

            $tag = new Elemento([
                'tag' => 'a',
                'self' => true
            ]);

        }else{

            $tag = new Elemento([
                'tag' => 'a',
                'attrs' => $attrs,
                'self' => true
            ]);

        }
        
        echo $tag->getElement();

    }

    public static function _a () {

        $tag = new Elemento([
            'tag' => 'a'
        ]);
        
        echo $tag->close('a');

    }

}