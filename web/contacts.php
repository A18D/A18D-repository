<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = "Контакты";
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
            <form class="reg_form" action="" method="post">
                <h1 class="reg_h">Обратная связь</h1>
                <fieldset class="reg_field">
                    <input type="text" name="username" id="username" class="reg_input" placeholder="Ваше имя">
                    <br>
                    <input type="email" name="email" id="email" class="reg_input" placeholder="Email">
                    <br>
                    <textarea name="mess" id="mess" class="reg_input" placeholder="Сообщение" autofocus
                              required></textarea>
                </fieldset>

                <fieldset class="reg_field">
                    <input type="button" id="mess_send" class="reg_but" value="Отправить сообщение">
                </fieldset>

                <div class="alert alert-danger mt-2" id="errorBlock"></div>
            </form>
        </div>
    </div>
</main>
<?php require 'blocks/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $("#mess_send").click(function() {
    let userName = $("#username").val();
    let email = $("#email").val();
    let mess = $("#mess").val();

    $.ajax({
      url: "ajax/mail.php",
      type: "POST",
      cache: false,
      data: {
        "username": userName,
        "email": email,
        "mess": mess
      },
      dataType: "html",
      success: function(data) {
        if (data == "OK") {
          $("#errorBlock").hide();
          $("#mess_send").attr("value", "Все готово");
          $("#mess").val("");
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