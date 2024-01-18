<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>

<div class="well">
    <form class="forgot_pass" method="POST" action="">
        <p>Для сброса пароля укажите ниже Ваш логин или адрес
            электронной почты. Если Ваша учетная запись есть в базе
            данных, на Ваш адрес электронной почты будет отправлено
            письмо, содержащее инструкции по восстановлению доступа.</p>

        <h2>Поиск по логину</h2>

        <div class="form-group">
            <label>Логин</label>
            <input type="text" class="form-control" maxlength="12" name="password"/>

        </div>
        <button class="btn btn-primary" id="search" name="search">Найти</button>
        <hr>
        <h2>Поиск по адресу электронной почты</h2>

        <div class="form-group">
            <label>Адрес электронной почты</label>
            <input type="text" class="form-control" maxlength="12" name="password"/>

        </div>
        <button class="btn btn-primary" id="search" name="search">Найти</button>
        <hr>

    </form>
</div>
</body>
</html>