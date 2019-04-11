<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
        $website_title = "Регистрация на сайте";
        require 'blocks/head.php';
    ?>
</head>

<body>
    <script src="/bundle.js"></script>
    <?php require 'blocks/header.php';?>
    <main class="container mt-5">
        <div class="row">
            <?php require 'blocks/aside.php';?>
            <div class="col-md-8 mb-3">
                <form class="reg_form" action="" method="post">
                    <h1 class="reg_h">Форма регистрации</h1>
                    <fieldset class="reg_field">
                        <input type="text" name="username" id="username" class="reg_input" placeholder="Ваше имя">
                        <br>
                        <input type="text" name="surname" id="surname" class="reg_input" placeholder="Ваша фамилия">
                        <br>
                        <input type="email" name="email" id="email" class="reg_input" placeholder="Email">
                        <br>
                        <input type="text" name="login" id="login" class="reg_input" placeholder="Логин" autofocus
                            required>
                        <br>
                        <input type="password" name="pass" id="pass" autocomplete="off" placeholder="Пароль" required>
                    </fieldset>

                    <fieldset class="reg_field">
                        <input type="button" id="reg_user" class="reg_but" value="Зарегистрироваться">
                    </fieldset>

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>
                </form>
            </div>
        </div>
    </main>
    <?php require 'blocks/footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('#reg_user').click(function() {
        let userName = $('#username').val();
        let surName = $('#surname').val();
        let email = $('#email').val();
        let login = $('#login').val();
        let pass = $('#pass').val();

        $.ajax({
            url: 'ajax/regServer.php',
            type: 'POST',
            cache: false,
            data: {
                'username': userName,
                'surname': surName,
                'email': email,
                'login': login,
                'pass': pass
            },
            dataType: 'html',
            success: function(data) {
                if (data == 'OK') {
                    $('#errorBlock').hide();
                    $("#reg_user").attr('value', "Все готово"); //versions older than 1.6
                } else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        })
    });
    </script>

</body>

</html>