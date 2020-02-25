<?php

// Grab User submitted information
$email = $_POST["email"];
$password = $_POST["password"];

$user = 'root'; // Mysql User
$password = ''; // Mysql Password
$server = 'localhost'; // Mysql Host
$database = 'perform'; // Mysql Databse
// PDO Connection string

$con = mysqli_connect('localhost', 'username', 'password', 'database');




$result = "SELECT * FROM perform WHERE email = $email and password=$password";

$row = $result;

if($row["email"]==$email && $row["password"]==$password)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>

