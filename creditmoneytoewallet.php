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

    <h1>Please enter your New Horizon Bank account number and pin: </h1>

    <form action="creditcheck.php" method='post'>
    <label for="AcNo"></label><br>
    <input type="text" id="AcNo" name="AcNo"  placeholder="Account Number"><br>

    <label for="pin"></label><br>
    <input type="text" id="pin" name="pin"  placeholder="Pin"><br>

    <input class="submit" type="submit" ></input>


    </form>
    
</body>
</html>