<?php
require('../vendor/autoload.php');

$library = new App\Library();
$books = $library->getBooksByFilter($_GET['filterType'], $_GET['filterValue']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Résultats filtrés</title>
</head>
<body>

<h1>Ma blibliothèque </h1>

    <?php
    switch($_GET['filterType']) {
        case 'title':
            $book = array_pop($books);
            include "book_information.php"; //include book detail information
            break;
        case 'author':
            include "author_information.php"; // include author detail information
            include "books_list.php"; // include liste des livres par rapport au filtre
            break;
        default:
            include "books_list.php"; // include liste des livres par rapport au filtre
    }
    ?>

<p><a href="index.php">Retour à la page principale</a></p>
</body>

</html>