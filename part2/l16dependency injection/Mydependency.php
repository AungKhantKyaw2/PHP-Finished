<?php

ini_set('display_errors',1);





class Course{
     public $courseidx;

     public function __construct($val){
      $this->courseidx= $val;
     }

     public function getcourseidx(){
       echo "Course Idx is =" .$this->courseidx . "<br/>";
     }

}

class Lesson extends Course{
   public $lessonidx;

  
   public function __construct($val){
    $this->lessonidx= $val;
   }
   
   public function getlessonidx(){
    echo "LEsson Idx is =" .$this->lessonidx . "<br/>";
  }
}

echo "This is Dependency Injection. <br/>";

$getcourse = new Course(1);
$getcourse->getcourseidx();

$getlesson = new Lesson(20);
$getlesson->getlessonidx();
$getlesson->getcourseidx();

// $getcourse->getlessonidx(); error
echo "<hr/>";

//Parent to child

Class Vehicle {
  public $modelnumber;
  public $evcarobj;
  public $carmodeobj;
 

  public function __construct($val,$price,$type)
  {
      $this->modelnumber =$val;
      $this->evcarobj = new Evcar($price) ;
      $this->carmodeobj = new Carmode($type);
  }
    public function getmodelnumber()
{
      echo "Vehicle Model Number is= " . $this->modelnumber . "<br/>";
    }}

class Evcar extends Vehicle{
    public $price;

    public function __construct($price)
    {
      $this->price = $price;
    }

    public function getprice(){
      echo "Ev Car Price is =" . $this->price ."<br/>";
    }
}

class Carmode extends Vehicle{
     public $type;
     public function __construct($type){
      $this->type =$type;
     }

     public function gettype(){
      echo "Car Type is =" . $this->type ."<br/>";
     }
}

$getvehicle = new Vehicle(1111,200000,"Luxury");
$getvehicle->getmodelnumber();


$getevcar = new Evcar(300000);
$getevcar->getprice();//Ev Car Price is =300000

$getcarmode = new Carmode('Joung Joung');
$getcarmode->gettype();//Car Type is =Joung Joung

$getvehicle->evcarobj->getprice();//Ev Car Price is =200000
$getvehicle->carmodeobj->gettype();//Car Type is =Luxury

echo '<hr/>';

//=>Child to parent


class Phone {
    public $brand;

    public function __construct($val){
        $this->brand =$val;
      
    }

    public function getbrand(){
      return "Phone Brand is =" . $this->brand ."<br/>";
    }
}

class Phonemodel extends Phone{
    public $price;

    public function __construct($val,Phone $phone){
        $this->price =$val;
        $this->brand =$phone->getbrand();
      
    }
    
    public function getprice(){
      return "Price is =" . $this->price ."<br/>";
    }
}

$phoneobj = new Phone("Iphone");
echo $phoneobj->getbrand(); //Phone Brand is =Iphone

$phonemodelobj = new Phonemodel(500,$phoneobj);
$phonemodelobj->getprice();//

//passing by properties
echo $phonemodelobj->getbrand(); // Phone Brand is =Phone Brand is =Iphone


// echo $phonemodelobj->brand ; //Phone Brand is =Iphone
?>