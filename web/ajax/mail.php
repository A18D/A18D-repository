<?php
$userName = trim(filter_var($_POST["username"], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
$mess = trim(filter_var($_POST["mess"], FILTER_SANITIZE_STRING));

$error = '';

if (strlen($userName) <= 3) {
    $error = "имя, ";
}

if (strlen($email) <= 3) {
    $error .= "email, ";
}

if (strlen($mess) <= 3) {
    $error .= "сообщение, ";
}

if ($error != '') {
    echo trim("Введите " . substr($error, 0, (strlen($error) - 2)));
    exit();
}

$my_email = "a18d@ya.ru";
$subject = "=?utf-8?B?" . base64_encode("Новое сообщение с сайта") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/html; charset=utf-8\r\n";

if (mail($my_email, $subject, $mess, $headers)) {
    echo 'OK';
} else {
    echo 'При отправке сообщения возникла ошибка';
}

?>