<?php

$AccountNo = $_POST['AcNo'];
$Pin = $_POST['pin'];

session_start();
$_SESSION['AcNo'] = $AccountNo;
$_SESSION['pin'] = $Pin;

$hostname = "localhost";
$Username = "root";
$Password = "";
$bank = "bank_accounts";
$plaza = "Plaza";


$conn_bank = mysqli_connect($hostname, $Username, $Password, $bank );

if($conn_bank->connect_error)
{
    die("<br>Connection failed: ". $conn_bank->connect_error);
}


$conn_plaza = mysqli_connect($hostname, $Username, $Password, $plaza );

if($conn_plaza->connect_error)
{
    die("<br>Connection failed: ". $conn_plaza->connect_error);
}

$sql1 = "SELECT * FROM Account_info WHERE (Userid = $AccountNo) AND (pin = $Pin) ";

$result = $conn_bank->query($sql1);


if($result==true && $result->num_rows>0)
{
    echo "Account found. Please enter the amount to be transferred: ";
    echo ("<form action='transferer.php' method='post'><p><input type='text' id='amount' name='amount' class='username' ><br></p><p><input type='submit' value='Submit'></p>


</form>
");
}

?>
