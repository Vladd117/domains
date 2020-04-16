<!DOCTYPE html>
<html>

<head>
    <?php
    $website_title = "Регистрация";
    require_once('./blocks/head.php');
    ?>

</head>

<body>
    <?php
    require_once('./blocks/header.php');
    ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-3">
                <h4>Форма регистрации</h4>
                <form action="" method="post">

                    <label for="login">Выберите себе логин</label>
                    <input class="form-control" name="login" id="login" type="text">

                    <label for="username">Ваше имя</label>
                    <input class="form-control" name="username" id="username" type="text">

                    <label for="email">Введите адрес электронной почты</label>
                    <input class="form-control" name="email" id="email" type="email">

                    <label for="pass">Придумайте пароль</label>
                    <input class="form-control" name="pass" id="pass" type="password">
                    <div class="alert alert-danger mt-2" id="error-block"></div>
                    <button type="button" id="reg_user" class="btn btn-success mt-5 green">Зарегистрироваться</button>
                </form>
            </div>
            <?php
            require_once('./blocks/aside.php');
            ?>
        </div>

    </main>

    <?php
    require('./blocks/footer.php');
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('#reg_user').click(function() {
            // alert("WORK!!!");

            var name = $('#username').val();
            var email = $('#email').val();
            var login = $('#login').val();
            var pass = $('#pass').val();

            $.ajax({
                url: './reg/reg.php',
                type: 'POST',
                cache: false,
                data: {
                    'username': name,
                    'email': email,
                    'login': login,
                    'pass': pass
                },
                dataType: 'html',
                success: function(data) {
                    if (data == 'Готово') {
                        $('#reg_user').text('Регистрация завершена!');
                        $('#error-block').hide();
                    } else {
                        $('#error-block').show();
                        $('#error-block').text(data);
                    }
                }

            });
        });
    </script>


</body>

</html>