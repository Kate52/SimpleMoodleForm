<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
<div class="well">
<!--    --><?php //require 'exit.php'?>
    <form action="exit.php" method="post">
        <?php
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];

        echo "Привет";
        echo "<h1>$firstname $lastname</h1>";
        echo "
<p>Личная информация</p>
    <p>
        Адрес электронной почты
        <a >
            $email
        </a>
    </p>"
        ?>

        <button class="btn-primary" id="exit" name="exit">Выход</button>
    </form>
</div>
</body>
</html>


<!-- Ваш HTML для личного кабинета здесь -->
