<?php

$admin = $_GET['admin'];
$pass = $_GET['passw'];

$hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "Plaza";


$conn = mysqli_connect($hostname, $Username, $Password, $dbname );

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

if($admin == "admin" && $pass == "abcd")
{
     echo "Administrator name and Password authenticated.";
     echo "<br> Please <a href='adminproceed.php'>click here</a> to continue.";
}


?>