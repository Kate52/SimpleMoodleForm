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
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>

    <div class="well">
        <form class="auth" method="POST" action="">
            <img src="img/logo.png">
            <br>
            <?php include 'authorization.php' ?>
            <div class="form-group">

                <input type="text" placeholder="Логин" class="form-control" name="login" required="required"/>
            </div>
            <div class="form-group">

                <input placeholder="Пароль" type="password" class="form-control" name="password"
                       required="required"/>
            </div>

            <button class="btn btn-primary btn-block" id="autorization" name="autorization">Вход</button>
            <div>
                <label><a href="forgot_password.php">Забыли пароль?</a> <br><label>

                <label>Нет учетной записи?
                    <a href="index.php">Создать учетную запись</a>
                </label>
            </div>
        </form>
    </div>
</body>
</html>