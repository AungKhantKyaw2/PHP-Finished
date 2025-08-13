<?php

ini_set('display_errors',1);
require_once("Music.php");
require_once("Video.php");

require_once("gallery/test/Photo.php");

use gallery\Photo;

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
?>