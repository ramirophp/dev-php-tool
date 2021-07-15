<!DOCTYPE html>
<html lang="es">
<head>

    <title>Formas de utilizar Piezas</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web Api">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Ramiro Garcia Gonzalez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<header>

    <h1>PAGES</h1>

</header>

<nav>

    <ul>
        <li><a href="./?page=0">forma 1</a></li>
        <li><a href="./?page=1">forma 2</a></li>
        <li><a href="./?page=2">forma 3</a></li>
    </ul>

</nav>

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

<footer>

<h2>

    Hello World.

</h2>

</footer>

</body>

</html>