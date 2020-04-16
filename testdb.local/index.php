<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel='stylesheet' href="./css/style.css" media="all" />
    <meta charset="utf-8">
    <title>Test PHP</title>
    <?php include('connectdb.php'); ?>

</head>

<body>

    <?php
    require "header.php";
    ?>
    <div class="content">

        <div class="block-one">
            <?php
            // $query = $pdo->query('SELECT * FROM `users`');
            // while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            //     echo "<h3>" . $row['login'] . "</h3>" . $row['email'] . "<br>" . $row['name'] . " " . $row['surname'] . "<br>";
            // }; // Вывод через массив (PDO::FETCH_ASSOC)

            // echo "<br>";

            // $query2 = $pdo->query('SELECT * FROM `users` ORDER BY `id` DESC LIMIT 2');
            // while ($row_obj = $query2->fetch(PDO::FETCH_OBJ)) {
            //     echo "<h3>" . $row_obj->login . "</h3>" . $row_obj->email . "<br>" . $row_obj->name . " " . $row_obj->surname . "<br>";
            // }; // Вывод через массив (PDO::FETCH_ASSOC)
            // $login = 'admin';
            // $sql = 'SELECT `login`, `email` FROM `users` WHERE `login` = ?';
            // $query = $pdo->prepare($sql);
            // $query->execute([$login]);
            // $users = $query->fetchAll(PDO::FETCH_OBJ);
            // foreach ($users as $key) {
            //     echo $key->email . "<br>";
            // }
            // $sql = 'SELECT * FROM `users` WHERE `login`=:login';
            // $query = $pdo->prepare($sql);
            // $query->execute(['login' => 'Vasil']);
            // $user1 = $query->fetch(PDO::FETCH_OBJ);
            // echo $user1->name . " " . $user1->surname;
            ?>
        </div>
        <div class="block-two">
            <?php


            echo $DB_users->getName("admin") . "<br>";
            echo $DB_users->getSurname("Vasil") . "<br>";
            echo $DB_users->getEmail("Petro") . "<br>";
            //echo $DB_users->getAll("admin") . "<br>";
            $userinfo = $DB_users->getAll("admin");
            echo $userinfo->name . " " . $userinfo->surname . " Email is: " . $userinfo->email . "<br>";
            //$DB_users->addUser('bulldoser', 'bull66@yahoo.com', 'Степан', 'Кочерыжкин');
            $DB_users->deleteUser('dozer');
            $DB_users->changeLogin('bull66@yahoo.com', 'dozer');
            $userinfo = $DB_users->getAll("dozer");
            echo "<h3>" . $userinfo->login . "</h3>" . $userinfo->name . " " . $userinfo->surname . " Email is: " . $userinfo->email;

            ?>
        </div>


        <div class="block-three">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
    </div>

    


</body>

</html>