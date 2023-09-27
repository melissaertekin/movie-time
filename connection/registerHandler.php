<?php
include  '../assets/php/Database.php';

$db = new Database();
$db->query('CREATE TABLE IF NOT EXISTS user (
id INTEGER PRIMARY KEY AUTOINCREMENT,
email VARCHAR(255) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
username VARCHAR(255),
admin_val INTEGER
)');


$email = htmlspecialchars(@$_POST['email']);
$username = htmlspecialchars(@$_POST['username']);
$password = htmlspecialchars(@$_POST['password']);


if (preg_match('#^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,}$#', $email) &&
    strlen($email) <= 255 &&
    strlen($password) >= 8 &&
    strlen($username) > 5 && !$db->userExists($email)
) {
    try {
        $statement = $db->prepare("
INSERT INTO user ('username','email', 'password','admin_val')
VALUES (:username,:email,:password,:admin_val)
");
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':username',$username);
        $statement->bindValue(':admin_val',0);

        $statement->execute();
        header('location:login.php');
    } catch (PDOException $exception) {
        echo  $username,$password;
        echo 'insert failed!';
        echo $exception;
    }
}else if($db->getUsers($email)){
    ?><a href="login.php"> <h3>You already have an account please log in</h3> </a>
    <?php
}else{ ?>
    <a href="register.php"> <h3>Something went wrong. Please try again</h3></a>
    <?php } ?>





