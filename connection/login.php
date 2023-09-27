<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/css/register.css">

</head>
<body>
<?php if (@$_GET['lang'] == 'en') {
    include '../language/english.php';
}else{
    include '../language/french.php';
} ?>


<div class="form-container">
    <form action="loginHandler.php" method="post">
        <h3>Login Now</h3>
        <input type="email" name="email" placeholder="write your mail here" required class="box">
        <input type="password" name="password" placeholder="enter your password" required class="box">
        <button type="submit" name="submit" value="login now" class="btn">Login Now</button>
        <p>Don't have an account? <a href="register.php">Register now</a></p>
    </form>
</div>

</body>
</html>