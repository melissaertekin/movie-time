<?php
include '../assets/php/Database.php';

session_start();

if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $db = new Database();
    $db_user = $db->query("SELECT * FROM user WHERE email = '$email'")->fetch(PDO::FETCH_ASSOC);
    if (!empty($db_user)){
        $user = new User($db_user);
        // On test si password == password in the database
        //echo password_verify($password,$user->getPassword());
        if ($password == $user->getPassword()) {
            //getAdmin returns -->  if user -> 0 ---> if admin -> 1
            // If user == admin : admin value = 1 no
            if ($user->getAdmin() == 1) {
                $SESSION['username'] = $user->getUsername();
                $SESSION['userid'] = $user->getId();
                header('location:/../admin.php?logged='.$user->getId());
            } else {
                $SESSION['username'] = $user->getUsername();
                $SESSION['userid'] = $user->getId();
                header('location:/../index.php?logged='.$user->getId());
            }
        } else {
            $message = 'you entered a wrong password';
            header('location:login.php');
        }
    } else {
        $message = 'Account not found';
        header('location:register.php');
    }
}
