<?php
error_reporting(E_ERROR | E_PARSE);

if(isset($_COOKIE['firstname']) && isset($_COOKIE['lastname']) && isset($_COOKIE['email']) ){
    $_SESSION['firstname'] = $_COOKIE['firstname'];
    $_SESSION['lastname'] = $_COOKIE['lastname'];
    $_SESSION['email'] =$_COOKIE['email'];

    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $email=$_SESSION['email'];

    echo "<meta http-equiv='refresh' content='0;url=personal_cabinet.php?firstname=$firstname&lastname=$lastname&email=$email'>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
    <div class="well">
        <form method="POST" action="">
            <h1>Новая учетная запись</h1>

            <div class="form-group">
                <label>Логин</label>
                <input type="text" class="form-control" name="login" required="required"/>
            </div>
            <p>
                Пароль должен содержать символов - не менее 8, цифр - не менее 1,
                строчных букв - не менее 1, прописных букв - не менее 1, не менее 1 символов,
                не являющихся буквами и цифрами, например таких как *, - или #.
            </p>

            <div class="form-group">
                <label>Пароль</label>
                <input type="password" class="form-control" maxlength="12" name="password" required="required"/>
            </div>

            <div class="form-group">
                <label>Адрес элкетронной почты</label>
                <input type="email" class="form-control" name="email" required="required"/>
            </div>

            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="firstname" required="required"/>
            </div>

            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" class="form-control" name="lastname" required="required"/>
            </div>
            <?php include 'register.php' ?>
            <hr color="white">
            <button class="btn btn-primary" id="register" name="register">Создать мой новый аккаунт</button>
            <button class="btn" id="cancel" name="cancel"><a href="authorization_form.php">Отмена</a></button>
        </form>
    </div>
</body>
</html>