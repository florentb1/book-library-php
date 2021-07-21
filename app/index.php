<?php
require('../vendor/autoload.php');

    $library = new App\Library();
    $books = $library->getBooks();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLIBLIOTHEQUE</title>
</head>
<body>
        <h1>Ma bibliothèque </h1>

        <?php include "books_list.php"; ?>
</body>
</html>



