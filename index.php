<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Plaza";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Create the database plaza....
$sql1 = "CREATE DATABASE Plaza";
if($conn->query($sql1)===TRUE)
{
    //echo "Database created succesfully";
}

else
{
    //echo "Error creating database: ". $conn->error;
}

$conn->close();

$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn->connect_error)
{
   // die("<br>Connection failed: ". $conn->connect_error);
}

$sql2 = "CREATE TABLE Users(

    UserName VARCHAR(120)   ,
    Pass VARCHAR(100)  ,
    Email_id VARCHAR(100)  ,
    CarNo VARCHAR(30) ,
    eWalletNo INT(16)
    )";

if($conn->query($sql2)==TRUE)
{
    //echo "<br>Table Users created succesfully";
}

else
{
    //echo "<br>Error creating table: " . $conn->error;
}

$sql3 = "CREATE TABLE Transactions(
    Tran_id INT NOT NULL AUTO_INCREMENT, /* Transaction id */
    User VARCHAR(120),
    Dayy DATE,
    ExactTime DATETIME,
    Result VARCHAR (10), /*Successful or failure */
    CurrentIncome INT(20),

    PRIMARY KEY (Tran_id)
    )";
    

    if($conn->query($sql3))
    {
        //echo "<br>Table Transactions created succesfully";
    }

else
{
    //echo "<br>Error creating table: " . $conn->error;
}

?>

<html>
    <head>
    <link rel="stylesheet" href="Homepage.css">

        <title>Home Page</title>
        <style>
        th, p {text-align: left;}
        body {
              font-family: Arial, Helvetica, sans-serif;
            }

    </style>

    </head>

    <body>
        <header>
        <h1>Welcome to Toll Plaza!!</h1>

        <p>Please select one option to continue: </p>

        </header>


        <section>
            <nav>
            <div> <h3>Create an account: </h3>
            <form action="SignupForm.php">
            <button type = "submit">Sign up</button>
        </form>
        </div>
            </nav>
        </section>
        <article>
        <div> <h3>login to your account: </h3>
        <form action="loginForm.php">
            <button type = "submit">Sign in</button>
        </form>
        </div>
        </article>

    </body>
</html>


