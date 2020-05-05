<?php
            $db = 'db_promcatalys2';
            $user = 'promcatalys2';
            $password = 'Prom369548';
            $host = 'optimus.mtw.ru';
            $charset = 'UTF-8';
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
            $pdo = new PDO($dsn, $user, $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
