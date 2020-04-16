<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel='stylesheet' href="./css/style.css" media="all" />
    <meta charset="utf-8">
    <title>Test PHP</title>
    <?php include "function.php"; ?>

</head>

<body>
    <?php
    require "header.php";
    ?>
    <div class="content">

        <div class="block-one">
            <?php
            include('class.php');
            ?>
        </div>
        <div class="block-two">
            <?php
            $y = 14;
            $key = 11;
            echo sum($key, 39) . "<br>";
            printsome("Еще текст", $key);
            ?>
        </div>
        <div class="block-three">
            <!-- <form action="" method="post">
                <label for="name">Ваше имя</label><br>
                <input name="name" type="text"><br>
                <label for="age">Год рождения</label><br>
                <input name="age" type="date"><br>
                <button type="submit">Ok</button>
            </form>
            <?php
            //echo "Данные пользователя: <br>" . check();
            ?> -->
            <form action="user.php" method="post">
                <label for="name">Ваше имя</label><br>
                <input name="name" type="text"><br>
                <label for="age">Год рождения</label><br>
                <input name="age" type="date"><br>
                <button type="submit">Ok</button>
            </form>
            <?php
            if ($_SESSION['name'] != "" && $_SESSION['age']) {
                echo "User name SESSION: " . $_SESSION['name'] . "<br>";
                echo "User age SESSION: " . $_SESSION['age'] . "<br>";
            };
            session_destroy();
            echo "User name COOKIE: " . $_COOKIE['name'] . "<br>";
            echo "User age: COOKIE: " . $_COOKIE['age'] . "<br>";
            if ($_SESSION['admin'] == true) {
                echo "Пользователь является администратором! <br>";
            };
            ?>

        </div>
        <div class="block-one">
            <form action="/write.php" method="post">
                <label for="text">Введите текст</label><br>
                <textarea name="text" cols="50" rows="10"></textarea><br>
                <button type="submit">Ok</button>
            </form>
            <?php
            $file = fopen('text/data.txt', 'r');
            echo fread($file, 200) . "<br>";
            fclose($file);
            echo file_get_contents('text/data.php') . "<br>"; //Вывод содержимого файла 
            file_put_contents('text/data.txt', "Text: \n"); //Запись в файл второго параметра
            echo file_exists('text/data.txt'); //Проверка на наличие файла
            echo filesize('text/data.txt') . "<br>"; //Вывод размера файла в килобайтах
            //unlink('text/data.txt'); //Удаление файла с сервера


            //Работа с датой и временем
            date_default_timezone_set('Europe/Moscow');
            $date = date('Дата: d.m.Y');
            $time = date('Время — H:i:s');
            $date_now = new DateTime();
            $date_now->modify('+1 hour');
            echo $date . "<br>" . $time . "<br>" . time() . "<br>" . $date_now->format('Время — H:i:s') . "<br>";

            //Функции для работы с массивами
            $arr = [5, 16, 17, 45, 9, 2];
            echo count($arr) . "<br>";
            foreach ($arr as $key) {
                echo $key . ", ";
            };
            echo "<br>";
            echo in_array(1, $arr) ? "Да, есть!" : "Нет такого."; //Проверяет, есть ли элемент в массиве
            echo "<br>";
            print_r($arr); //Вывод значений массива для разработчиков
            echo "<br>";
            sort($arr); //Сортирует массив по возрастанию (rsort) - по убыванию
            foreach ($arr as $key) {
                echo $key . ", ";
            };
            echo "<br>";
            $arr_01 = ['c' => 5, 'd' => 2, 'a' => 78, 'b' => 55];
            ksort($arr_01); //Сортирует ассоциированный массив по ключу
            print_r($arr_01);
            echo "<br>";
            shuffle($arr); //Перемешивает массив
            print_r($arr);
            echo "<br>";
            echo mt_rand(1, 100) . "<br>"; //Случайное число от 1 до 100
            ?>
        </div>
        <div class="block-two">
            <?php
            include('interface.php');
            ?>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
    </div>

</body>

</html>