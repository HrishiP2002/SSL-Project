<?php

$user = $_GET['User'];
$pass = $_GET['Pass'];
$carNo = $_GET['car'];
$email = $_GET['email'];
$eWalletNo = $_GET['ewall'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Plaza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("<br>Connection failed: " . mysqli_connect_error());
}


if($user != NULL && $pass != NULL && $carNo != NULL && $email != NULL && $eWalletNo != NULL )
{

    $sql = "INSERT INTO Users(UserName, Pass, Email_id, CarNo, eWalletNo) VALUES('$user','$pass','$email','$carNo','$eWalletNo');";

    if($conn->query($sql)==TRUE)
    {
        echo("<br>Account created succesfully.");
        echo("<form action='index.php'><button type = 'submit'>Back To Homepage</button></form>");
    }

    else
    {
        echo("<br>Couldn't create account. Please try again.");
    }

}

else
{
    echo("<br>Please enter all credentials....");
    echo("<br><a href='SignupForm.php'>Click here</a> to go back to the form");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div style="background-image: url(sunset.jpg);">
</div>
</body>
</html>