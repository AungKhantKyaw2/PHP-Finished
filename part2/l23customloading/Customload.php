<?php

ini_set('display_errors',1);


// echo __DIR__; //C:\xampp\htdocs\PHP\part2\l22namespaceexercise

class Customload{
     public static function loader($classname){
      echo "Loading the class =${classname} <br/>";
            //str_replace(find,replace,string)
    $file = str_replace("\\","/",$classname).".php"; // for Linux
   if(file_exists($file))
   {
      require_once(__DIR__."/".$file);
   }else{
    echo "File No exist";
   }
     }
}


?>