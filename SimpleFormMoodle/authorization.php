<?php
require 'conn.php';
require_once 'register.php';

if(ISSET($_POST['autorization'])){

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    session_start();
    $stmt = $conn->prepare("SELECT * FROM students where login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user['password'] == $password and $user['login'] == $login) {
        session_start();
        $firstname = $user['firstname'];
        $lastname = $user['lastname'];
        $email = $user['email'];


        if (!isset($_SESSION['uid'])) {
            $_SESSION['uid'] = bin2hex(random_bytes(8)); // Генерация случайной строки из 16 байт
        }

        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;

        setcookie('firstname', $firstname, time() + 7 * 24 * 60 * 60, '/');
        setcookie('lastname', $lastname, time() + 7 * 24 * 60 * 60, '/');
        setcookie('email', $email, time() + 7 * 24 * 60 * 60, '/');

        echo "<meta http-equiv='refresh' content='0;url=personal_cabinet.php?firstname=$firstname&lastname=$lastname&email=$email'>";
        exit;
        // Авторизуем пользователя
    }
    else{
        $error_message = "Неверный логин или пароль";
        echo "<label class='error'>Неверный логин или пароль. Попробуйте заново</label>";
    }

}
