<?php
$db = 'testing';
$user = 'root';
$password = 'root';
$host = 'localhost';
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;
$pdo = new PDO($dsn, $user, $password);

class DB_users
{
    protected $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    function getName($login)
    {
        global $pdo;
        $sql = 'SELECT * FROM `users` WHERE `login` = :login';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $login]);
        $name = $query->fetch(PDO::FETCH_OBJ);
        return $name->name;
    }
    function getSurname($login)
    {
        global $pdo;
        $sql = 'SELECT * FROM `users` WHERE `login`=:login';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $login]);
        $name = $query->fetch(PDO::FETCH_OBJ);
        return $name->surname;
    }
    function getEmail($login)
    {
        global $pdo;
        $sql = 'SELECT * FROM `users` WHERE `login`=:login';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $login]);
        $name = $query->fetch(PDO::FETCH_OBJ);
        return $name->email;
    }
    function getAll($login)
    {
        global $pdo;
        $sql = 'SELECT * FROM `users` WHERE `login`=:login';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $login]);
        $name = $query->fetch(PDO::FETCH_OBJ);
        return $name;
        //return $name->name . " " . $name->surname . " Email: " . $name->email;
    }
    function addUser($login, $email, $name, $surname)
    {
        global $pdo;
        $sql = 'INSERT INTO users(login, email, name, surname) VALUES(:login, :email, :name, :surname)';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $login, 'email' => $email, 'name' => $name, 'surname' => $surname]);
    }
    function changeLogin($email, $newlogin)
    {
        global $pdo;
        $sql = 'UPDATE `users` SET `login`=:login WHERE `email`=:email';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $newlogin, 'email' => $email]);
    }
    function deleteUser($login)
    {
        global $pdo;
        $sql = 'DELETE FROM `users` WHERE`login`=:login';
        $query = $pdo->prepare($sql);
        $query->execute(['login' => $login]);
    }
}
$DB_users = new  DB_users($pdo);
