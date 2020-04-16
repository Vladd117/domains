<?php
            $db = 'testing';
            $user = 'root';
            $password = 'root';
            $host = 'localhost';
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
            $pdo = new PDO($dsn, $user, $password);
