<?php

// Grab User submitted information
$email = $_POST["email"];
$pass = $_POST["password"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("perform",$con);

$result = mysql_query("SELECT email, password FROM users WHERE email = $email");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>