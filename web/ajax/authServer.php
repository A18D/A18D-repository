<?php
$login = trim(filter_var($_POST["login"], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST["pass"], FILTER_SANITIZE_STRING));
$error = '';

if (strlen($login) <= 3) {
    $error .= "логин, ";
}

if (strlen($pass) <= 3) {
    $error .= "пароль, ";
}

if ($error != '') {
    echo trim("Введите " . substr($error, 0, (strlen($error) - 2)));
    exit();
}

$hash = "hashA18D";
$password = md5($pass . $hash);

require_once '../mysql_connect.php';
$sql = "SELECT `id` FROM `users` WHERE `login` = :login && `password` = :password"; //
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'password' => $password]); //, 
$user = $query->fetch(PDO::FETCH_OBJ);

if (!$user or $user->id == 0) {
    echo 'Такого пользователя не существует';
} else {
    setcookie('log', $login, time() + 3600 * 24 * 30, '/');
    echo 'OK';
}
?>