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

        XYZ::main();

            $piezas = new Piezas;

            define('ART','articulos');
            define('CAT','categorias');
            define('ETQ','etiquetas');
            define('ATR','atributos');

            $api = [ART,CAT,ETQ,ATR];

            if (isset($_GET['api'])) {

                switch ($api[$_GET['api']]) {

                    case 'articulos' : 

                        $articles = $piezas->getArticles();

                        var_dump($articles);

                        echo "<hr>";

                        $piezas->listArticles($articles);

                    break;

                    case 'categorias' : 

                        $categories = $piezas->getCategories();

                        var_dump($categories);

                        echo "<hr>";

                        $piezas->listCategories($categories);

                    break;

                    case 'etiquetas' : 

                        $tags = $piezas->getTags();

                        var_dump($tags);

                        echo "<hr>";

                        $piezas->listTags($tags);

                    break;

                    case 'atributos' : 

                        $attrs = $piezas->getAttrs();

                        var_dump($attrs);

                        echo "<hr>";

                        $piezas->listAttrs($attrs);

                    break;

                }

            }

        XYZ::_main();

        XYZ::section();

            XYZ::h2();echo 'Endpoints';XYZ::_h2();

            XYZ::ul();
                XYZ::li();echo "https://api.piezas.xyz/articulos/registros";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/articulos/registros/#";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/articulos/paginacion/#";XYZ::_li();
            XYZ::_ul();
            XYZ::hr();

            XYZ::ul();
                XYZ::li();echo "https://api.piezas.xyz/categorias/registros";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/categorias/registros/#";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/categorias/paginacion/#";XYZ::_li();
            XYZ::_ul();
            XYZ::hr();

            XYZ::ul();
                XYZ::li();echo "https://api.piezas.xyz/etiquetas/registros";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/etiquetas/registros/#";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/etiquetas/paginacion/#";XYZ::_li();
            XYZ::_ul();
            XYZ::hr();

            XYZ::ul();
                XYZ::li();echo "https://api.piezas.xyz/atributos/registros";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/atributos/registros/#";XYZ::_li();
                XYZ::li();echo "https://api.piezas.xyz/atributos/paginacion/#";XYZ::_li();
            XYZ::_ul();

        XYZ::_section();

        XYZ::footer();

            XYZ::h2();echo "hello world.";XYZ::_h2();

            XYZ::div();

                XYZ::a(['href'=>'https://github.com/ramirophp/dev-php-tool/blob/main/formas/f2.php']);
                    echo 'Ver Estructura - forma 2';
                XYZ::_a();

            XYZ::_div();

        XYZ::_footer();

    XYZ::_body();

XYZ::_html();