<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
        <link rel="stylesheet" href="SignupForm.css">
    </head>

    <body>
    <form action="CreateAccount.php" method = "GET">
        <p class="sign">Sign up</p>
          <p><label for="User" align="center"><i>User Name:</i></label><br></p>
          <p><input type="text" id="User" name="User" class="username" align="center"><br></p>
          <p><label for="Pass">Password</label><br></p>
          <p><input type = "text" id = "Pass" name="Pass" class="pass"><br></p>
          <p><label for="email">Email_id: </label><br></p>
          <p><input type = "text" id = "email" name="email" class="email"><br></p>
          <p><label for="car">Car Number: </label><br></p>
          <p><input type = "text" id = "car" name="car" class="carno"><br></p>
          <p><label for="ewall">eWallet Number: </label><br></p>
          <p><input type = "text" id = "ewall" name="ewall" class="ewall"><br></p>
       
          <p><input type="submit" value="Submit"></p>

        </form>

    </body>
</html>