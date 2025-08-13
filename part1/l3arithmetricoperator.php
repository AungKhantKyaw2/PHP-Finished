<?php

    // => Arithmetic Operators
//  + - * / %

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawlamyine";
$car =false;

$myarrs=["maung","maung","Kyaw Kyaw"];
$colors = array("red","green","blue");

echo $num1;
echo $num2;
echo $num1+$num2;
echo $num2-$num1;
echo $num1-$num2;
echo $num1*$num2;
echo $num2/$num2;
echo $num2%$num1;

// echo $myarrs;  //Error:  Array to string conversion 
//echo $myarrs;//Array to string conversion 

//check datatypes

var_dump($num1);//int(100)
var_dump($num2);//int(200)
var_dump($num3);//float(30.28)
var_dump($city);//string(10) "Mawlamyine"
var_dump($car);//bool(false)
var_dump($myarrs);//array(3) {  [0]=> string(5) "maung"   [1]=> string(5) "maung" [2]=> string(9) "Kyaw Kyaw  }
var_dump($colors);//array(3) { [0]=>  string(3) "red" [1]=>string(5) "green"  [2]=> string(4) "blue" }

$num4 = true;
$num5 = "10";
$num6 ='20';


var_dump($num5,$num6);//String

echo $num5 +$num6;//30
echo $num6 -$num5;//10
echo $num4+$num6;//11


var_dump($num5+$num6);//int(30)
var_dump($num4+$num6);//int(21)

//Overwrite or Override

$num5=50;
$num6='60';

var_dump($num5,$num6);

echo $num5+$num6; //110

?>
