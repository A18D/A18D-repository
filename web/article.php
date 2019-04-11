<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
        if (count($_COOKIE) == 0 or $_COOKIE['log'] == null or $_COOKIE['log'] == '') {
            header('Location: /reg.php');
            exit();
        }

        $website_title = "Добавление статьи";
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
                <h4>Добавление статьи</h4>
                <form action="" method="post">
                    <label for="title">Заголовок статьи</label>
                    <input type="text" name="title" id="title" class="form-control">

                    <label for="intro">Интро статьи</label>
                    <textarea type="text" name="intro" id="intro" class="form-control"> </textarea>

                    <label for="text">Текст статьи</label>
                    <textarea type="text" name="text" id="text" class="form-control"> </textarea>

                    <input type="button" id="add_article" class="reg_but" value="Добавить">

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>
                </form>
            </div>
        </div>
    </main>
    <?php require 'blocks/footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('#add_article').click(function() {
        let title = $('#title').val();
        let intro = $('#intro').val();
        let text = $('#text').val();

        $.ajax({
            url: 'ajax/sendArticle.php',
            type: 'POST',
            cache: false,
            data: {
                'title': title,
                'intro': intro,
                'text': text,
            },
            dataType: 'html',
            success: function(data) {
                if (data == 'OK') {
                    $('#errorBlock').hide();
                    $("#add_article").attr('value', "Все готово"); //versions older than 1.6
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