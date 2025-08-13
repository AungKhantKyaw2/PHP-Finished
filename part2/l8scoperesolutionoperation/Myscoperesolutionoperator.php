<?php

ini_set('dispaly_errors',1);

class Myscoperesolutionoperator{

    //Member Constant Variables
    const GREETING = "Hello Friend. Good evening from Thailand";
    const THANKS ="Hi Friend. Thanks for visiting our country";

    public $fullname ="Aung Kyaw Kyaw";

    //Member Methods
    public function sayhifi(){
        echo self::GREETING; //for const properties 
    }
    public function saybye(){
        echo static::THANKS;     // for const properties 
    }
    public function __construct(){
        echo "I am start working by automatically from Main class <br/>";
    }
}

class Child1 extends Myscoperesolutionoperator{
const GREETING = "Hello Student. Good evening from Myanmar";
const THANKS ="Hi Friend.See you again,Myanmar";   

}

class Child2 extends Myscoperesolutionoperator{
    const GREETING = "Hello Student. Good evening from Srilanka";
    const THANKS ="Hi Friend.See you again";   
  

    public function sayhello(){
        echo self::GREETING;
    }
    public function sayseeyou(){
        echo static::THANKS;
    }
}

class Child3 extends Myscoperesolutionoperator{
    public function __construct(){
        parent::__construct();
        parent::saybye();//I am start working by automatically from Main class
        echo "I am start working by automatically from Sub class <br/>";
    }
}


echo "This is Scope Resolution Operator . <br/>";

$obj = new Myscoperesolutionoperator();
echo $obj->fullname ."<br/>";
echo $obj::GREETING ."<br/>"; // we can call sro
echo "<br/>";
echo Myscoperesolutionoperator::GREETING;//

$obj->sayhifi(); echo "<br/>";
$obj->saybye();

echo "<hr/>";
echo "<hr/>";


$ch1 = new Child1();
echo $ch1->fullname . "<br/>"; //Aung Kyaw Kyaw
echo $ch1::GREETING ."<br/>"; 
echo Child1::GREETING;
echo "<br/>";
$ch1->sayhifi(); echo "<br/>";
$ch1->saybye();
echo "<hr/>";

echo "<hr/>";
echo "<hr/>";

$ch2 = new Child2();
echo $ch2->fullname ."<br/>";//Aung Kyaw Kyaw
echo $ch2::GREETING. "<br/>";//Hello Student. Good evening from Srilanka
echo Child2::GREETING ."<br/>";//Hello Student. Good evening from Srilanka
echo "<hr/>";


$ch2->sayhifi(); echo "<br/>";//Hello Student. Good evening from Thailand self:::
$ch2->saybye();//Hi Friend.See you again  static::
echo "<hr/>";
echo "<br/>";
$ch2->sayhello();//Hello Student. Good evening from Srilanka
echo "<br/>";
$ch2->sayseeyou();//Hi Friend.See you again static::



echo "<hr/>";
echo "<hr/>";

$ch3 = new Child3();////I am start working by automatically from Main class //I am start working by automatically from Sub class
echo $ch2->fullname ."<br/>";
echo $ch2::GREETING. "<br/>";
echo Child2::GREETING ."<br/>";



$ch3->sayhifi(); echo "<br/>";//Hello Friend. Good evening from Thailand
$ch3->saybye();//Hi Friend. Thanks for visiting our country



echo "<hr/>";

?>