<?php

require_once './tool/forma_3.1.php';

?>

<!DOCTYPE html>

<html lang="es">

    <head>

        <title>Mi Blog</title>
        <meta charset="UTF-8">
        <meta name="description" content="Free Web Api">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Ramiro Garcia Gonzalez">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <header>

            <h1>My Blog</h1>

        </header>

        <nav>
            <h2>
                Estructuras Html
            </h2>
            <ul>
                <li><a href="./?page=0">forma 1</a></li>
                <li><a href="./?page=1">forma 2</a></li>
                <li><a href="./?page=2">forma 3</a></li>
            </ul>

        </nav>

        <main>

            <section>
                <h2>Vision</h2>
                <div>
                    <p>
                    Crear herramientas php <br>
                    Disponibles para aquellos desarrolladores <br>
                    Que buscan construir una base s&oacute;lida y din&aacute;mica <br>
                    Para cimentar sus proyectos web.
                    </p>
                </div>
            </section>

            <section>
                <h2>Mision</h2>
                <div>
                    Convertir a dev-php-tool la herramienta <br>
                    Referente a la cimentacion de estructuras <br>
                    web (html) en todo el mundo.
                </div>
            </section>

        </main>

        <section>

            <?php

            define('F1','forma_1');
            define('F2','forma_2');
            define('F3','forma_3');

            $pages = [F1,F2,F3];

            if (isset($_GET['page'])) {

                switch ($pages[$_GET['page']]) {

                    case 'forma_1' : 

                        header('Location: ./formas/f1.php');

                    break;

                    case 'forma_2' : 

                        header('Location: ./formas/f2.php');

                    break;

                    case 'forma_3' : 

                        header('Location: ./formas/f3.php');

                    break;

                }

            }

            ?>

        </section>

        <footer>

            <h2>

                Hello World.

            </h2>

            <div>
                <a href="https://github.com/ramirophp">GitHub</a><br>
                <a href="http://localhost">Back</a>
            </div>

        </footer>

    </body>

</html>