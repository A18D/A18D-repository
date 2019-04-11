<?php
$userServer = "root";
$passServer = "18198812";
$db = "testbd";
$host = "localhost";
$dsn = "mysql:host=" . $host . ';dbname=' . $db;
$pdo = new PDO($dsn, $userServer, $passServer);
?>