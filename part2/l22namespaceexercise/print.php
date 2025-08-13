<?php

ini_set('display_errors',1);
require_once("Music.php");
require_once("Video.php");

require_once("gallery/Photo.php");//Method 1 and Method 2
require_once("gallery/animateshow/Protrait.php");////Method 1 and Method 2


use gallery\Photo; // Method 2
use gallery\animateshow\Protrait;

$musicobj = new Music();
$musicobj->play();


$videoobj= new Video();
$videoobj->play();

//  error = with   name space
// $photoobj = new Photo();
// $photoobj->play();

// Method 1 
// $photoobj = new gallery\Photo();
// $photoobj->play();


// Method 2
$photoobj = new Photo();
$photoobj->play();

$portrait = new gallery\animateshow\Protrait();
$portrait->play();

$portrait = new Protrait();
$portrait->play();



?>