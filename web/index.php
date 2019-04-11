<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = "Test PHP";
    require 'blocks/head.php';
    ?>
</head>

<body>
<script src="/bundle.js">
</script>
<?php require 'blocks/header.php'; ?>
<main class="container mt-5">
    <div class="row">
        <?php require 'blocks/aside.php'; ?>

        <div class="col-md-8 mb-3">
            <?php
            require_once 'mysql_connect.php';
            $sql = "SELECT * FROM `articles` ORDER BY `date` DESC";
            $query = $pdo->query($sql);

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo "<h2>$row->title</h2>
                <p>$row->intro</p>
                <p><b>Автор статьи: </b><mark>$row->author</mark></p>
                <div class='mb-4'>
                <a href='/news.php?id=$row->id' title='$row->title'>
                Подробнее
                </a>
                </div>";
            }
            ?>
        </div>
    </div>
</main>
<?php require 'blocks/footer.php'; ?>
</body>

</html>