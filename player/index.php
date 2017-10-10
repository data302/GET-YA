<?php


     include_once('inc.php');

     echo '<!DOCTYPE html>';
     echo '<html lang="en">';
     echo '<head>';
     echo '<meta charset="utf-8">';
     echo '<link rel="stylesheet" type="text/css" href="../css/normalize.css">';
     echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">';
     echo '<link rel="stylesheet" type="text/css" href="../js/mediaplayer/mediaelementplayer.min.css">';
     echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
     echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
     echo '</head>';
     echo '<body>';
     $urls = getya($_GET['urls']);
     $postersvideo = getya($_GET['poster']);
     echo '<video poster="'.$postersvideo.'" controls "width=610 height=233>';
     echo '<source type="video/mp4" src="http://get-ya.mxis.ru/api/video.php?url_video='.$urls.'">';
     echo '</video>';
     echo '<script type="text/javascript" src="../js/jQuery.min.js"></script>';
     echo '<script type="text/javascript" src="../js/mediaplayer/mediaelement-and-player.min.js"></script>';
     echo '<script type="text/javascript" src="../js/app.js"></script>';
     echo '</body>';
     echo '</html>';

?>
