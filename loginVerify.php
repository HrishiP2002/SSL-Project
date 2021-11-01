<?php

$User = $_GET['User'];
$Pass = $_GET['Pass'];
$CarNo = $_GET['car'];

$hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "Plaza";

session_start();
$_SESSION['user'] = $User;
$_SESSION['pass'] = $Pass;
// $_SESSION['pc'] = 0;
// $_SESSION[]

$conn = mysqli_connect($hostname, $Username, $Password, $dbname );

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sqll = "SELECT * FROM Users WHERE (Users.UserName = '$User') AND (Users.Pass = '$Pass') AND (Users.CarNo = $CarNo)";

$result = $conn->query($sqll);

$count = $result->num_rows;

if(  $count>0)
{
    echo "Username and password authenticated";
    echo "<br>Please <a href = loginProceed.php>click here</a> to continue";
}

else
{
    echo "Usename or password incorrect";
}

?>