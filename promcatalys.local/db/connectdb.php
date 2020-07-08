<?php
            $db = 'promcatalys05062020';
            $user = 'root';
            $password = 'root';
            $host = 'localhost';
            $charset = 'UTF-8';
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
            $pdo = new PDO($dsn, $user, $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
