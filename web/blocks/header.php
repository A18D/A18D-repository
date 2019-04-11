<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">PHP blog</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Главная</a>
        <a class="p-2 text-dark" href="../contacts.php">Контакты</a>
        <?php
        if (count($_COOKIE) > 0 && array_key_exists('log', $_COOKIE) && $_COOKIE['log'] != '')
            echo '<a class="p-2 text-dark" href="/article">Добавить статью</a>';
        ?>
    </nav>

    <?php
    if (count($_COOKIE) == 0 or !array_key_exists('log', $_COOKIE) or $_COOKIE['log'] == '') :
        ?>
        <a class="btn btn-outline-primary mr-2" href="/auth">Войти</a>
        <a class="btn btn-outline-primary" href="/reg">Регистрация</a>
    <?php
    else :
        ?>
        <a class="btn btn-outline-primary" href="/auth">Кабинет пользователя</a>
    <?php
    endif;
    ?>

</div>