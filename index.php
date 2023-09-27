<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movie Time </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'header.php';
$username = @$_SESSION['username'];
$currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>

<?php
(!empty(@$_GET['lang'])) ? $lang= @$_GET['lang'] : $lang = 'en';
($lang == 'en') ? include "language/english.php" : include "language/french.php";

if(!empty($trad)){ ?>
    <h2> <?php echo $trad['index']['top'] ?> </h2> <?php } ?>


<!-- Liste des films -->

<div class="movie">
    <?php
    include 'assets/php/Database.php';
        $db = new Database();
        $movies = $db->query('SELECT id,title_fr,title_en,img_link FROM movie')->fetchAll();
        foreach ($movies as $movie) :
        ?>
    <div>
        <img src="<?php echo $movie['img_link'] ?>" alt="supposed to be a movie picture but it is a cute cat picture">
        <h3 class ="movie_title">
            <?php if($lang == 'en' || $lang == ''){
                echo $movie['title_en'];
} else echo $movie['title_fr']; ?>
        </h3>
        <a href= "<?php echo 'movieDes.php?id='. $movie['id'].'&lang='.$lang; ?>">
            <button class="movie_detail">
                <?php if(!empty($trad)){?>
                <h2> <?php echo $trad['index']['detail'] ; }?>  </h2>
            </button>
        </a>
    </div>
    <?php
    endforeach;
    ?>
</div>

<?php include 'footer.php'?>
</body>
</html>
