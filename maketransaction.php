<?php

session_start();
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];

$hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "Plaza";

$conn = mysqli_connect($hostname, $Username, $Password, $dbname );

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql1 = "SELECT eWallet_balance FROM Users WHERE UserName = '$user' and Pass = '$pass'";

$result = $conn->query($sql1);

$row = $result->fetch_assoc();

$eWall_bal = $row['eWallet_balance'];

if($eWall_bal > 150)
{
    $eWall_bal = $eWall_bal - 150;

    $sql2 = "UPDATE Users SET eWallet_balance = '$eWall_bal' WHERE UserName = '$user' and Pass = '$pass' ";

    $conn->query($sql2);

    // echo $conn->error;
    $res = "Successful";
    $day = date('D', time());
    $time = date('Y-m-d H:i:s', time());


    $sql4 = "INSERT INTO Transactions(User, Dayy, ExactTime, Result, CurrentIncome) VALUES('$user', '$day', '$time', '$res', 150)";

    $conn->query($sql4);

    // echo $conn->error;

    echo "Transaction Successful. You may pass through the toll plaza. Happy Journey :))";
    echo "<form action='index.php'><button>Back to Homepage</button></form>";
}

else
{
    echo "You do not have enough balance in your eWallet for the transaction. Minimum required balance is 150 Rupees.";


    // echo $conn->error;
    $res = "Failed";
    $day = date('D', time());
    $time = date('Y-m-d H:i:s', time());


    $sql4 = "INSERT INTO Transactions(User, Dayy, ExactTime, Result, CurrentIncome) VALUES('$user', '$day', '$time', '$res', 0)";

    $conn->query($sql4);

}

?>