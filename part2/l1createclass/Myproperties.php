<?php

// echo "Hay";

//=> Define Class Object (OOP = Object-Oriented Programming)

//class Classname{
//    properties 
    // methods 
// }

// new Classname();

class Myproperties{
    
    //Properties
    var $firstname = "Data Land";
    var $lastname ="Technlogy";

}

$obj = new Myproperties();

echo "This is class Object <br/>";

echo $obj->firstname." ".$obj->lastname;



?>