<?php

ini_set('dispaly_errors',1);
// echo "Hay";

//=> Define Class Object (OOP = Object-Oriented Programming)

//class Classname{
//    properties 
    // methods 
// }

// new Classname();


class Thiskeyword{
    
      //=> Access Modifier
      //public = anyone can access
      //private = only access inside main class
      //protected = subclass /Extended class
     

      public $companyname ="Data Land Technology";
     private $jobtitle= "Manager";// can't access from outside
     protected $location ="Yangon";//can;t access from outside
      
      public function getinfo(){
        $num =10;
        echo $num;

        echo $this->companyname;
        echo $this->jobtitle;
        echo $this->location;
     

   
      }

      public function getcompanyname(){
        echo $this->companyname; //Data Land Technology
        echo "<br/>";

        $this->companyname = "ABC Co,Ltd";
        echo $this->companyname;//

        $this->jobtitle ="Directior";
        echo $this->jobtitle;

        $this->location ="Mawlamyine";
        echo $this->location;
      }
}

class Vehicle{

      public $brand = "Toyota";

      public function getbrandname(){
        return $this->brand;
      }

      public function setbrandname($name){

       $this->brand = $name;

      }
}

$obj = new Thiskeyword();
echo "This is This keyword Modifier <br/>";


echo $obj->companyname ."<br/>";//Data Land Technology


$obj->getinfo(); //10Data Land Technology
echo "<br/>";

$obj->getcompanyname();////Data Land Technology
echo "<br/>";
echo $obj->companyname;//ABC Co,
// echo $obj->jobtitle;
// echo $obj->location;
echo "<hr/>";

// echo $obj->jobtitle;//error
// echo $obj->location;//error

$obj2 =new Vehicle();

echo $obj2->brand;//Toyota
echo "<br/>";
echo $obj2->getbrandname();//Toyota

echo $obj2->setbrandname("Suzuki");//Suzuki
echo "<br/>";
echo $obj2->getbrandname();
echo "<br/>";

echo $obj2->setbrandname("Mazda");
echo $obj2->getbrandname(); // Mazda
echo "<hr/>";
?>