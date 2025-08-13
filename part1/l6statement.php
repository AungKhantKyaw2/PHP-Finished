<?php

// => if statment 

$x= 10;
$y=20;

if($x > $y){
    echo "your condition is yes";
}
if($x < $y){
    echo "your condition is yes";
}

//=>if else
if($x > $y){
    echo "Yes. x greater than y";
}else{
    echo "No, x less than y";
}

///short hand

if($x < $y)  echo "Yes. x less than y"; else echo "No, x greater than y";

$color ="gray";
$colorvalue =$color; //Assign by reference

echo  $color;
echo $colorvalue;

if($colorvalue === "red"){
    echo "My fav color is red";
}else {
    echo "I hate red color";
}

if($colorvalue === "red"){
    echo "My fav color is $color";
}else {
    echo "I hate red color";
}


// => Logical Operator
// &&(And) || (Or)  !(Not)

$a =100;
$b= 200;
$c =300;

if($a<$b && $b>$c ){
    echo "It is true";
}else
{
   echo "It is false";
}

if($a< $b && $b < $c ){
    echo "It is true";
}else
{
   echo "It is false";
}


if($a < $b || $b > $c ){
    echo "It is true";
}else
{
   echo "It is false";
}

// true        false       false
         // true         false   gue=false    result =true
if($a < $b || $b > $c && $a > $c ){
    echo "It is true";
}else
{
   echo "It is false";
}


// true        false       false
         // true         false   gue=false    result =false
if(($a < $b || $b > $c) && $a > $c ){
    echo "It is true";
}else
{
   echo "It is false";
}


if(!($a < $b)){
    echo "It is true";

}else{
    echo "It is false";
}

// if() elseif() else

if($b > $c){
    echo "It is true";
}else if($b===200)
{
     echo "It is equal";
}else{
    echo "It is false";
}   


if($b > $c) echo "It is true"; else if($b===200)  echo "It is equal"; else echo "It is false";



if($b > $c)
    echo "It is true";
else if($b===200)

     echo "It is equal";
else
    echo "It is false";

    // switch(condition){
    //     case stm1:
    //         code to be excuted;
    //         break;
    //     case stm2:
    //         code to be excuted;
    //         break;
    //     default:
    //         code to be excuted;
    //         break;

                              
    // }

   $phone ="iphone";
   
switch($phone){
    case "sony":
       echo "I can't buy sony phone";
        break;
    case "iphone":
        echo "I hate apple prducts";
        break;
    case "mi":
        echo "Ok i can buy";
         break; 
    case "samsung":
        echo "My fav mobile product is samsung";
        break;          
    default:
        echo "i love keypad";

                          
}


?>