<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel='stylesheet' href="./css/bootstrap.min.css" media="all" />
    <link type="text/css" rel='stylesheet' href="./css/main.css" media="all" />
    <link rel='icon' href="./img/php.ico" />
    <title>Test PHP</title>
    <?php include('connectdb.php'); ?>

</head>
<body>
<?php
    require_once('./blocks/header.php');
    ?>
    <div style="text-align: center">
    <br><br>
    <h1>Ошибка 404</h1>
    <h2>Такой страницы не существует</h2>
    <a href="index.php">Перейти на главную траницу</a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <?php
    require('./blocks/footer.php');
    ?>
</body>
</html>