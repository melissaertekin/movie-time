<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>register</title>
        <!-- js file link  -->
        <script type="module" src="js/connect.js" defer></script>
       <!-- css file link  -->
        <link rel="stylesheet" href="../assets/css/register.css">

    </head>
    <body>
        <div>
            <form action="registerHandler.php" method="post">
               <h3>Register now</h3>
               <input type="text" name="username" placeholder="Enter your name">
               <input type="email" name="email" placeholder="Enter your email">
               <input type="password" id="password" name="password" placeholder="Enter your password">
               <button id="register" type="submit" name="submit" value="Register now">Register Now</button>
              <p>Already have an account? <a href="login.php">Login now</a></p>
            </form>
        </div>
    </body>
</html>