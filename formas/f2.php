<?php

require_once '../tool/forma_2.php';

XYZ::doctype();
XYZ::html('es');

    XYZ::head();

        XYZ::title();
            echo "forma 2";
        XYZ::_title();

        XYZ::meta(['charset' => 'UTF-8']);

        XYZ::meta(['name' => 'description', 'content' => 'XYZ class php']);

        XYZ::meta(['name' => 'keywords', 'content' => 'XYZ, class, php, html, css, javascript']);

        XYZ::meta(['name' => 'author', 'content' => 'Ramiro Garcia Gonzalez']);

        XYZ::meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);

    XYZ::_head();

    XYZ::body();

        XYZ::header();
            XYZ::h1();
                echo "Piezas";
            XYZ::_h1();
        XYZ::_header();

        XYZ::nav();

            XYZ::ul();

                XYZ::li();
                    XYZ::a(['href'=>'./f2.php?api=0']);echo "Articulos";XYZ::_a();
                XYZ::_li();

                XYZ::li();
                    XYZ::a(['href'=>'./f2.php?api=1']);echo "Categorias";XYZ::_a();
                XYZ::_li();

                XYZ::li();
                    XYZ::a(['href'=>'./f2.php?api=2']);echo "Etiquetas";XYZ::_a();
                XYZ::_li();

                XYZ::li();
                    XYZ::a(['href'=>'./f2.php?api=3']);echo "Atributos";XYZ::_a();
                XYZ::_li();

                XYZ::li();
                    XYZ::a(['href'=>'http://localhost']);echo "Back";XYZ::_a();
                XYZ::_li();

            XYZ::_ul();

        XYZ::_nav();

    XYZ::_body();

XYZ::_html();