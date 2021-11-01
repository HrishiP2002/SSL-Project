<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Money to eWallet</title>
</head>
<body>

    <h1>Please enter your New Horizon Bank account number: </h1>

    <form action="creditcheck.php" method='$_POST'>
    <label for="AcNo"></label><br>
    <input type="text" id="AcNo" name="AcNo"  placeholder="Account Number"><br>

    <input class="submit" type="submit" align="center"></input>


    </form>
    
</body>
</html>