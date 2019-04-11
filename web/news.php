<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    require_once 'mysql_connect.php';
    $sql = "SELECT * FROM `articles` WHERE `id` = :id ";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $_GET['id']]);
    $article = $query->fetch(PDO::FETCH_OBJ);
    $website_title = "Test PHP: $article->title";
    require 'blocks/head.php';
    ?>
</head>

<body>
<script src="/bundle.js"></script>
<?php require 'blocks/header.php'; ?>
<main class="container mt-5">
    <div class="row">
        <?php require 'blocks/aside.php'; ?>
        <div class="col-md-8 mb-3">
            <div class="jumbotron">
                <h1><?= $article->title ?></h1>
                <p><b>Автор статьи:</b>
                    <mark><?= $article->author ?></mark>
                </p>
                <?php
                $His = date(" H:i:s", $article->date);
                $date = date("d ", $article->date);
                $arrMonth = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];
                $date .= $arrMonth[date("n", $article->date) - 1];
                $date .= $His;
                echo "<p><b>Время публикации: </b><u>$date</u></p>";
                ?>
                <p>
                    <?= $article->intro ?>
                    <br> <br>
                    <?= $article->text ?>
                </p>
            </div>
            <h3 class="mt-5">Комментарии</h3>
            <form action="/news.php?id=<?= $_GET['id'] ?>" method="post">
                <label for="username">Ваше имя</label>

                <?php
                $userName = (count($_COOKIE) > 0 && $_COOKIE['log']) ? $_COOKIE['log'] : "";
                ?>

                <input type="text" name="username" id="username" value="<?= $userName ?>" class="form-control">

                <label for="mess">Сообщение</label>
                <textarea type="text" name="mess" id="mess" class="form-control"> </textarea>

                <input type="submit" id="mess_send" class="btn btn-success mt-3 mb-5" value="Добавить комментарий">
            </form>
            <?php
            if (count($_POST) != 0 && $_POST['username'] != '' && $_POST['mess'] != '') {
                $username = trim(filter_var($_POST["username"], FILTER_SANITIZE_STRING));
                $mess = trim(filter_var($_POST["mess"], FILTER_SANITIZE_STRING));
                $sql = "INSERT INTO `comments` (`name`, `mess`, `article_id`) VALUES (?, ?, ?);";
                $query = $pdo->prepare($sql);
                $query->execute([$username, $mess, $_GET['id']]);
            }
            $sql = "SELECT * FROM `comments` WHERE `article_id` = :id ORDER BY `id` DESC;";
            $query = $pdo->prepare($sql);
            $query->execute(['id' => $_GET['id']]);
            $comments = $query->fetchAll(PDO::FETCH_OBJ);

            foreach ($comments as $comment) {
                echo "
                    <div class='alert alert-info mb-2'> 
                        <h4>$comment->name</h4>
                        <p>$comment->mess</p>
                    </div>";
            }

            ?>
        </div>
    </div>
</main>
<?php require 'blocks/footer.php'; ?>
</body>


</html>