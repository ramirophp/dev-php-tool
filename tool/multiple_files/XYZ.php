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

}