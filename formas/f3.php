<?php

require_once '../tool/forma_3.php';
require_once '../tool/multiple_files/XYZ.php';

$piezas = new Piezas;

$evta = new Envoltura;

define('ART','articulos');
define('CAT','categorias');
define('ETQ','etiquetas');
define('ATR','atributos');

$api = [ART,CAT,ETQ,ATR];

XYZ::doctype();
XYZ::html('es');

    echo $evta->head([

        $evta->title('forma 3'),
        $evta->meta(['charset' => 'UTF-8']),
        $evta->meta(['name' => 'description', 'content' => 'Envoltura class php']),
        $evta->meta(['name' => 'keywords', 'content' => 'Envoltura, class, php, html, css, javascript']),
        $evta->meta(['name' => 'author', 'content' => 'Ramiro Garcia Gonzalez']),
        $evta->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'])

    ]);

    XYZ::body();

        echo $evta->header($evta->h1('Piezas'));

        echo $evta->nav($evta->ul([

            $evta->a('Articulos',['href' => './f3.php?api=0']),
            $evta->a('Categorias',['href' => './f3.php?api=1']),
            $evta->a('Etiquetas',['href' => './f3.php?api=2']),
            $evta->a('Atributos',['href' => './f3.php?api=3']),
            $evta->a('Back',['href' => 'http://localhost'])

        ]));

        XYZ::main();

            isset($_GET['api']) ? 

                (    
                    $api[$_GET['api']] == 'articulos' ? 
                        
                        var_dump($piezas->getArticles()).
                        $evta->hr().$piezas->listArticles($piezas->getArticles())

                    :

                    (
                        $api[$_GET['api']] == 'categorias' ? 

                            var_dump($piezas->getCategories()).
                            $evta->hr().$piezas->listCategories($piezas->getCategories())
                        
                        : 
                        
                        (
                            $api[$_GET['api']] == 'etiquetas' ?

                                var_dump($piezas->getTags()).
                                $evta->hr().$piezas->listTags($piezas->getTags())
                            
                            :

                            (
                                $api[$_GET['api']] == 'atributos' ?

                                    var_dump($piezas->getAttrs()).
                                    $evta->hr().$piezas->listAttrs($piezas->getAttrs())

                                :

                                ''
                            )
                        )
                    )
                )

            : '';

        XYZ::_main();

        echo $evta->section([

            $evta->h2('Endpoints'),

            $evta->ul([
                "https://api.piezas.xyz/articulos/registros",
                "https://api.piezas.xyz/articulos/registros/#",
                "https://api.piezas.xyz/articulos/paginacion/#"
            ]),

            $evta->hr(),

            $evta->ul([
                "https://api.piezas.xyz/categorias/registros",
                "https://api.piezas.xyz/categorias/registros/#",
                "https://api.piezas.xyz/categorias/paginacion/#"
            ]),

            $evta->hr(),

            $evta->ul([
                "https://api.piezas.xyz/etiquetas/registros",
                "https://api.piezas.xyz/etiquetas/registros/#",
                "https://api.piezas.xyz/etiquetas/paginacion/#"
            ]),

            $evta->hr(),

            $evta->ul([
                "https://api.piezas.xyz/atributos/registros",
                "https://api.piezas.xyz/atributos/registros/#",
                "https://api.piezas.xyz/atributos/paginacion/#"
            ])

        ]);

        echo $evta->footer([

            $evta->h2('hello world.'),

            $evta->div($evta->a('Ver Estructura - forma 3',[
                'href' => 'https://github.com/ramirophp/dev-php-tool/blob/main/formas/f3.php'
            ]))

        ]);

    XYZ::_body();

XYZ::_html();