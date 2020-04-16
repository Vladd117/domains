<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if(strlen($username) <= 4) 
$error = 'Введите свое имя';
else if(strlen($email) <= 4) 
$error = 'Введите адрес электронной почты';
else if(strlen($login) <= 4) 
$error = 'Выберите себе логин';
else if(strlen($pass) <= 4) 
$error = 'Придумайте пароль для доступа';
if($error != '') {
    echo $error;
    exit();
}

$hash = "iammisterunivers";
$pass = md5($pass . $hash);

$user = "root";
$password = "root";
$db = "testing";
$host = "localhost";

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);
$sql = 'INSERT INTO userss(name, email, login, pass) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $pass]);
echo 'Готово';
?>