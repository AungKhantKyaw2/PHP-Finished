<?php

// echo "Hay";

//=> Define Class Object (OOP = Object-Oriented Programming)

//class Classname{
//    properties 
    // methods 
// }

// new Classname();


class MyMethod{
    
      //=> Access Modifier
      //public = anyone can access
      //private = only access inside main class
      //protected = subclass /Extended class
     
      //Class Method /Method
      public function greeting(){
        echo "Have a good day";

      }
      public function calculate($num){
        echo "Getting calculate number is = {$num} <br/>";

      }
      public function result($num=1){
        echo "Getting calculate number is = {$num} <br/>";

      }
    
}

$obj = new MyMethod();

echo "This is class Object <br/>";

echo $obj->greeting();

echo "<br/>";

// $obj->calculate(); no action

$obj->calculate(150);//Getting calculate number is = 150

$obj->result();//Getting calculate number is = 1
$obj->result(100);//Getting calculate number is = 100


?>