<?php

require_once 'conn.php';

if (isset($_POST['register'])) {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $res = mysqli_query($conn, "SELECT * FROM students WHERE login = '$login' OR email = '$email'");

    if ($res->num_rows > 0) {
        // Логин уже существует, отклонить регистрацию
        echo "<p style='color: red'>Логин или почта уже заняты</p>";
    }

    else {
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;

        setcookie('firstname', $firstname, time() + 7 * 24 * 60 * 60, '/');
        setcookie('lastname', $lastname, time() + 7 * 24 * 60 * 60, '/');
        setcookie('email', $email, time() + 7 * 24 * 60 * 60, '/');

        mysqli_query($conn, "INSERT INTO `students` VALUES('', '$firstname', '$lastname', '$password','$login', '$email')") or die(mysqli_error());
        echo "<meta http-equiv='refresh' content='0;url=personal_cabinet.php?firstname=$firstname&lastname=$lastname&email=$email'>";
        exit;
    }
    $conn->close();
}
?>
