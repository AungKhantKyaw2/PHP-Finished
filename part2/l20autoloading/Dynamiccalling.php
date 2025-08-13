<?php

ini_set('display_errors',1);
// require_once("Music.php");
// require_once("Video.php");
// require_once("gallery/Photo.php");
spl_autoload_register(function($classname){
    echo "Loading the class = $classname <br/>"; 

    require_once "$classname.php";
}
);

 
    $musicobj = new Music();

    $musicobj->play1();
    $musicobj->play();

    // $musicobj1 = new Test();
    // $musicobj1->play();





// $videoobj= new Video();

// $videoobj->play();


// $photoobj = new Photo();
// $photoobj->play();
?>