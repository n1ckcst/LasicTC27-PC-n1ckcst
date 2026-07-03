<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "student_account";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection)
{
    die("Database Connection Failed!");
}

?>