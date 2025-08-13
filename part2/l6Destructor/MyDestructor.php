<?php

ini_set('dispaly_errors',1);

//Class Object
class MyDestructor{

  public $num1 =100;
  private $num2= 200;
  protected $num3 =300;

  public $message = "Total result is ";

  //magic method

  public function __construct()
  {    
       $result = $this->num1 +$this->num2 + $this->num3;
       echo "$this->message = $result" ."<br/>";
    
  }
  //member method
  public function car($brand){
         echo "I bought a new {$brand} car . <br/>";
  }
   
  //magic method
 //Note :: Destructor can't set parameter
  public function __destruct() //operate the last
  {
    echo "I am start working automatically after all above ,hee hee:P";
  }
  
}
echo "This is Constructor <br/>";

$obj = new MyDestructor();
$obj->car("Toyota");

echo "<hr/>"
?>