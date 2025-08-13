<?php

ini_set('dispaly_errors',1);
// echo "Hay";

//=> Define Class Object (OOP = Object-Oriented Programming)

//class Classname{
//    properties 
    // methods 
// }

// new Classname();


class Myaccessmodifier{
    
      //=> Access Modifier
      //public = anyone can access
      //private = only access inside main class
      //protected = subclass /Extended class
     

      public $companyname ="Data Land Technology";

      var $personname ="Mr.Tin";
      private $jobtitle ="Manager"; //can't print from outside
      protected $location= "Yangon"; //can't print from outside

      public function getinfo(){
        $num =10;
        echo $num;

        // echo $companyname;// can't print
        // echo $personname;//can't print

        // echo $jobtitle;//can't print
        // echo $location;// can't print
      }


}

$obj = new Myaccessmodifier();
echo "This is Access Modifier <br/>";
echo $obj->companyname . "<br/>";

echo $obj->personname. "<br/>";
$obj->getinfo(); //10
echo "<hr/>";

$obj->companyname ="ABC Co,Ltd";
echo $obj->companyname ."<br/>"; //

$obj->personname = "Ko Tha";
echo $obj->personname ."<br/>";//

echo "<hr/>";

// $obj->jobtitle;
echo "<hr/>";

// $obj->location;
echo "<hr/>";



?>