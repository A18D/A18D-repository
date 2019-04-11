<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = "Авторизация на сайте";
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
            <?php
            if (count($_COOKIE) == 0 or !array_key_exists('log', $_COOKIE) or $_COOKIE['log'] == ''):
                ?>
                <form class="reg_form" action="" method="post">
                    <h1 class="reg_h">Форма авторизации</h1>
                    <fieldset class="reg_field">
                        <input type="text" name="login" id="login" class="reg_input" placeholder="Логин" autofocus
                               required>
                        <br>
                        <input type="password" name="pass" id="pass" autocomplete="off" placeholder="Пароль" required>
                    </fieldset>

                    <fieldset class="reg_field">
                        <input type="button" id="auth_user" class="reg_but" value="Войти">
                    </fieldset>

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>
                </form>
            <?php
            else:
                ?>
                <h2><?= $_COOKIE['log'] ?></h2>
                <input type="button" id='exit_btn' class="btn btn-danger" value="Выйти">
            <?php
            endif;
            ?>
        </div>
    </div>
</main>
<?php require 'blocks/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $("#exit_btn").click(function() {
    $.ajax({
      url: "ajax/exit.php",
      type: "POST",
      cache: false,
      data: {},
      dataType: "html",
      success: function(data) {
        document.location.reload(true);
      }
    });
  });

  $("#auth_user").click(function() {
    let login = $("#login").val();
    let pass = $("#pass").val();

    $.ajax({
      url: "ajax/authServer.php",
      type: "POST",
      cache: false,
      data: {
        "login": login,
        "pass": pass
      },
      dataType: "html",
      success: function(data) {
        if (data == "OK") {
          $("#errorBlock").hide();
          $("#auth_user").attr("value", "Готово");
          document.location.reload(true);
        } else {
          $("#errorBlock").show();
          $("#errorBlock").text(data);
        }
      }
    });
  });
</script>

</body>

</html>