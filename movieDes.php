<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="assets/css/movie.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'header.php';

    require_once 'assets/php/Database.php';
    $database = new Database();
    $movie = $database->getMovie(@$_GET['id']);

    (!empty(@$_GET['lang']) )? $lang= @$_GET['lang'] : $lang = 'en';
    ($lang == 'en') ? include "language/english.php" : include "language/french.php";

    ?>

    <div class="info_movie">
        <div class="movie_flex">
            <div class="img_movie">
                <img src= "<?php echo $movie->getImgLink(); ?>" alt="photo de film">
            </div>

            <div class="general_information">
                <?php if(!empty($trad)){
                    if($lang == 'en'){
                        ?> <p> <?php echo $trad['movie']['title'].$movie->getTitleEn() ?>  </p> <?php
                    }else { ?>  <p> <?php echo $trad['movie']['title'].$movie->getTitleFr() ?> </p> <?php }?>
                <p> <?php echo $trad['movie']['cast']. $movie->getCast() ?>  </p>
                <p> <?php echo $trad['movie']['director'] . $movie->getDirector() ?>  </p>
                <p> <?php echo $trad['movie']['writer'] .$movie->getWriter() ?>  </p>
                <p> <?php echo $trad['movie']['year'].$movie->getYear() ?> </p>
                <p> <?php echo $trad['movie']['imdb']. $movie->getImdb() ?> </p>
                <?php }?>
            </div>


        </div>
        <div class="description">
            <?php if(!empty($trad)){
                if($lang == 'en'){
                ?> <p> <?php echo $movie->getDescriptionEn() ?>  </p> <?php
            }else{ ?> <p> <?php echo $movie->getDescriptionFr(); ?> </p>
            <?php } }?>
        </div>
    </div>
</body>
</html>