<?php
$dbhost = "localhost";
$dbname = "tutorials";
$dbuser = "root";
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("Error: Failed to connect to database!");
}

?>