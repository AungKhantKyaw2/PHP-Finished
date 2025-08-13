<?php

ini_set('dispaly_errors',1);

//Class Object
class MyConstructor{

  public $num1 =100;
  private $num2= 200;
  protected $num3 =300;

  public $message = "Total result is ";

  //=>Magic Method
  // public function __construct()
  // {
  //   echo "I am start working by automatically! hee hee : P";
  // }
     
  // public function __construct($name)
  // {
  //   echo "I am ${name} start working by automatically! hee hee : P";
  // }

  // public function __construct($name,$old)
  // {
  //   echo "I am ${name} ,${old} years old. I am start working by automatically! hee hee : P";
  // }
     
  public function __construct()
  { 
     $result = $this->num1 + $this-> num2 + $this-> num3;
     $this->message = $result;
  //    echo "$this->message = $result";
  // echo "{$this->message} = $result";
  }
     public function print(){
      echo $this->message;
     }
}
echo "This is Constructor <br/>";
// $obj = new MyConstructor();
// $boj =new MyConstructor("Aung Aung");
// $obj =new MyConstructor("Aung Aung",25);

$obj = new MyConstructor();
$obj->print();

