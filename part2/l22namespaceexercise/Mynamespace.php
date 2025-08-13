<?php

ini_set('display_errors',1);


 echo __DIR__; //C:\xampp\htdocs\PHP\part2\l22namespaceexercise
 
// require_once("Music.php");
// require_once("Video.php");

// require_once("gallery/Photo.php");//Method 1 and Method 2
// require_once("gallery/animateshow/Protrait.php");////Method 1 and Method 2
use gallery\slideshow\Picture;
use gallery\slideshow\Image;
use gallery\slideshow as viewer;
spl_autoload_register(function($classname){
   echo "Loading the class =${classname} <br/>";
            //str_replace(find,replace,string)
    $file = str_replace("\\","/",$classname).".php"; // for Linux
   if(file_exists($file))
   {
      require_once(__DIR__."/".$file);
   }else{
    echo "File No exist";
   }
   
});

// use gallery\Photo; // Method 2
// use gallery\animateshow\Portrait;

$musicobj = new Music();
$musicobj->play();


$videoobj= new Video();
$videoobj->play();

//  error = with   name space
// $photoobj = new Photo();
// $photoobj->play();

$photoobj = new gallery\Photo();
$photoobj->play();


$portrait =new gallery\animateshow\Protrait();
$portrait->play();



$image = new Image();
$image->play();


$viewer = new viewer\Picture();
$viewer->play();

// $picture = new Picture();
// $picture->play();
?>