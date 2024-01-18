<?php

if(ISSET($_POST['exit'])){

    if (isset($_COOKIE['lastname']) && isset($_COOKIE['firstname'])&& isset($_COOKIE['email'])) {
        setcookie('lastname', '', time() - 3600, '/');
        setcookie('firstname', '', time() - 3600, '/');
        setcookie('email', '', time() - 3600, '/');
    }
    session_unset();
    session_destroy();

    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    exit;
}
