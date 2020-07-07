<?php

            $db = 'db_promcatalys3';

            $user = 'promcatalys3';

            $password = 'Prom369548';

            $host = 'optimus.mtw.ru';

            $dsn = 'mysql:host=' . $host . ';dbname=' . $db;

            $pdo = new PDO($dsn, $user, $password,

            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

