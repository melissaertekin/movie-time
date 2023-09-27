<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
include 'assets/php/Database.php';
include "header.php";

// User qui n'a pas logged in ne peut pas acceder à cette page donc pas de besion de le controller
// Recupere les donnée :
$userid = @$_GET['logged'];
(!empty(@$_GET['lang']) ) ? $lang= @$_GET['lang'] : $lang = 'en';
!empty(@$_GET['id']) ? $movieId = @$_GET['id'] : $movieId = 0;
$language_link = '?lang='.$lang.'&';
$login_link = 'logged='.$userid.'&';
$movie_link = 'id='.$movieId;



$db = new Database();

$user = $db->query('SELECT * FROM user WHERE id='.$userid)->fetch(PDO::FETCH_ASSOC);
$current_user = new User($user);

// On test si user is admin ou pas: si admin -> on va à la page admin
if($current_user->getAdmin() == 1){
    $login_link = 'logged='.$current_user->getUsername().'&';
    header('location:admin.php'.$language_link.$login_link.$movie_link);
}
    ?>

<section >
    <h3>Welcome <?php echo $current_user->getUsername(); ?></h3>
</section>

<div>
    <p>Tu peux trouver des informations sur ton compte </p>
    <p>Username : <?php echo $current_user->getUsername(); ?> </p>
    <p>Email : <?php echo $current_user->getEmail(); ?> </p>
    <p>Password : <?php echo $current_user->getPassword(); ?> </p>
</div>

</body>
</html>