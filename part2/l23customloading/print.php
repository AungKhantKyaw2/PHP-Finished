<?php

ini_set('display_errors',1);
require_once("Customload.php");

use gallery\slideshow as viewer;
// use gallery\slideshow\Image;
use gallery\Photo;

Customload::loader("Music");
$musicobj = new Music();
$musicobj->play();


Customload::loader("Video");
$videoobj= new Video();
$videoobj->play();

Customload::loader("gallery\Photo");
$photoobj = new Photo();
$photoobj->play();


Customload::loader("gallery\animateshow\Protrait");
$portrait =new gallery\animateshow\Protrait();
$portrait->play();


Customload::loader("gallery\slideshow\Picture");
$picture = new viewer\Picture();
$picture->play();



Customload::loader("gallery\slideshow\Image");
$image = new gallery\slideshow\Image();
$image->play();


// Method 1 
// $photoobj = new gallery\Photo();
// $photoobj->play();


// Method 2
// $photoobj = new Photo();
// $photoobj->play();

// $portrait = new gallery\animateshow\Protrait();
// $portrait->play();

// $portrait = new Protrait();
// $portrait->play();



?>