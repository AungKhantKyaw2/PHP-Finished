<?php

require_once("vendor/autoload.php");

use app\Music;
use app\Video;
use app\gallery\Photo;
use app\gallery\animateshow\Protrait;
use app\gallery\slideshow as slider;
use app\Models\Article;
use config\Auth;

$music =new Music();
$music->play();

$video = new Video();
$video->play();

$photo =new Photo();
$photo->play();

$protrait= new Protrait();
$protrait->play();


$image = new slider\Image();
$image->play();

$article = new Article();
$article->index();

$auth = new Auth();
$auth->login();


?>

  <!-- PSR4 (PHP Standard Recommendation Version 4) -->

  <!-- composer dump-autoload  -->
  <!-- composer dump-autoload -o  need to optimize for changing the code update   -->

  <!-- cd  l24psr4autoload -->