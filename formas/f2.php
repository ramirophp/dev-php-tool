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

    XYZ::_body();

XYZ::_html();