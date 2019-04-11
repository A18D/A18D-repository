<?php
$title = trim(filter_var($_POST["title"], FILTER_SANITIZE_STRING));
$intro = trim(filter_var($_POST["intro"], FILTER_SANITIZE_STRING));
$text = trim(filter_var($_POST["text"], FILTER_SANITIZE_STRING));

$error = '';

if (strlen($title) <= 3) {
    $error = "название статьи, ";
}

if (strlen($intro) <= 15) {
    $error .= "интро для статьи, ";
}

if (strlen($text) <= 20) {
    $error .= "текст статьи, ";
}

if ($error != '') {
    echo trim("Введите " . substr($error, 0, (strlen($error) - 2)));
    exit();
}

require_once '../mysql_connect.php';
$sql = "INSERT INTO `articles` (`title`, `intro`, `text`, `date`, `author`) VALUES (?, ?, ?, ?, ?);";
$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, time(), $_COOKIE['log']]);

echo 'OK';
?>