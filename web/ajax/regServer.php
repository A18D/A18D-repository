<?php
$userName = trim(filter_var($_POST["username"], FILTER_SANITIZE_STRING));
$surname = trim(filter_var($_POST["surname"], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST["login"], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST["pass"], FILTER_SANITIZE_STRING));

$error = '';

if (strlen($userName) <= 3) {
    $error = "имя, ";
}

if (strlen($surname) <= 3) {
    $error .= "фамилию, ";
}

if (strlen($login) <= 3) {
    $error .= "логин, ";
}

if (strlen($pass) <= 3) {
    $error .= "пароль, ";
}

if (strlen($email) <= 3) {
    $error .= "email, ";
}

if ($error != '') {
    echo trim("Введите " . substr($error, 0, (strlen($error) - 2)));
    exit();
}

$hash = "hashA18D";
$password = md5($pass . $hash);

require_once '../mysql_connect.php';
$sql = "INSERT INTO `users` (`login`, `password`, `email`, `name`, `surname`) VALUES (?, ?, ?, ?, ?);";
$query = $pdo->prepare($sql);
$query->execute([$login, $password, $email, $userName, $surname]);

echo 'OK';
?>