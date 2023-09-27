<?php
    session_start();
    // for language
    (!empty(@$_GET['lang'])) ? $lang= @$_GET['lang'] : $lang = 'en';
    ($lang == 'en') ? include "language/english.php" : include "language/french.php";
    //  for users
    //$logged_in = ok --> if user logged in
    $logged_in = @$_GET['logged'];
    $username = @$_SESSION['username'];
    $connection = '';
    !empty(@$_GET['id']) ? $movieId = @$_GET['id'] : $movieId = 0;
    // page url info :
    $pageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    $currentPageUrl = substr( $pageUrl, 0, strrpos( $pageUrl, "?"));

    $language_link = '?lang='.$lang.'&';
    $login_link = 'logged='.$logged_in.'&';
    $movie_link = 'id='.$movieId;
    header($currentPageUrl.$language_link.$login_link.$movie_link);
    ?>

<nav id="genre-nav-bar">
    <ul>
        <!-- Login or Logout -->
            <?php if(!empty($trad)){
                if($logged_in != 'no' && $logged_in != '' ){ ?>
                    <li><a href="<?php echo '/connection/logout.php?'.$language_link ?>"><?php echo $trad['connection']['logout'];?></a></li>
                <?php }else { ?>
                    <li><a href="<?php echo '/connection/login.php?'.$language_link ?>"><?php echo $trad['connection']['login'];?></a></li>
                <?php }
            }  ?>
        <!-- Profile Link -->
        <?php if($logged_in != 'no'  && $logged_in != '' ){ ?>
            <li><a href="<?php echo '/profile.php'.$language_link.$login_link.$movie_link ?>"><img src="assets/icons/profile.png" alt="profile icon for go to profile page"></a></li>
            <?php } ?>
        <!-- English or French -->
        <?php if(!empty($trad)){
            if($lang == 'en'){?>
            <li> <a href="<?php $new_link = '?lang=fr&';  echo $currentPageUrl.$new_link.$login_link.$movie_link ;?>"><img src="assets/img/translate.png"  alt="translator image"></a></li>
        <?php }else{ ?>
        <li><a href="<?php $new_link = '?lang=en&'; echo $currentPageUrl.$new_link.$login_link.$movie_link ;?>"><img src="assets/img/translate.png"  alt="translator image"></a></li>
        <?php }
        }  ?>
    </ul>
</nav>