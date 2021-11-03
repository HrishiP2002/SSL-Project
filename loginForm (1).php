
<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="loginform.css">

    </head>

    <body>
        <div class = "main">
        <p class="sign" align="center">Log in</p>
    <form action="loginVerify.php" method = "GET" class = "form1">
          <label for="User"></label><br>
          <input type="text" id="User" name="User" class="un" placeholder="Username" required><br>

          <label for="Pass"></label><br>
          <input type = "text" id = "Pass" name="Pass" class="pass" placeholder="Password" required><br>

          <label for="car"> </label><br>
          <input type = "text" id = "car" name="car" class="carno" placeholder="Car Number" required><br>

          <!-- <input type="submit" value="Login"> -->
<!--           <a class="submit" type="submit" align="center">Login</a> -->
        <button class="submit" type="submit" align="center" href="loginProceed.php" >Login</button>
    </form>
        </div>
    </body>
</html>
