<!DOCTYPE html>
<html lang="es">
    <head>

        <title>Basic Interface Grafica</title>
        <meta charset="UTF-8">
        <meta name="description" content="Free Web Api">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Ramiro Garcia Gonzalez">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <header>

            <h1>Piezas</h1>

        </header>

        <nav>

            <ul>
                <li><a href="./f1.php?api=0">Articulos</a></li>
                <li><a href="./f1.php?api=1">Categorias</a></li>
                <li><a href="./f1.php?api=2">Etiquetas</a></li>
                <li><a href="./f1.php?api=3">Atributos</a></li>
                <li><a href="http://localhost">Back</a></li>
            </ul>

        </nav>

        <main>

            <?php

                require_once '../tool/forma_1.php';

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

            ?>

        </main>

        <section>

            <h2>EndPoints</h2>

            <ul>
                <li>https://api.piezas.xyz/articulos/registros</li>
                <li>https://api.piezas.xyz/articulos/registros/#</li>
                <li>https://api.piezas.xyz/articulos/paginacion/#</li>
            </ul>
            <hr>
            <ul>
                <li>https://api.piezas.xyz/categorias/registros</li>
                <li>https://api.piezas.xyz/categorias/registros/#</li>
                <li>https://api.piezas.xyz/categorias/paginacion/#</li>
            </ul>
            <hr>
            <ul>
                <li>https://api.piezas.xyz/etiquetas/registros</li>
                <li>https://api.piezas.xyz/etiquetas/registros/#</li>
                <li>https://api.piezas.xyz/etiquetas/paginacion/#</li>
            </ul>
            <hr>
            <ul>
                <li>https://api.piezas.xyz/atributos/registros</li>
                <li>https://api.piezas.xyz/atributos/registros/#</li>
                <li>https://api.piezas.xyz/atributos/paginacion/#</li>
            </ul>

        </section>

        <footer>

                <h2>

                    Hello World.

                </h2>

        </footer>

    </body>

</html>