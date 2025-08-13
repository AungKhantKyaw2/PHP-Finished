<?php
// =>Variable Scope

//  (i) Global Variable Scope
//  (ii)Local Variable Scope
//  (iii)Static Variable Scope

$num1 =100;

function funone(){
    echo "Global Vaariable print in function" = $num1;
}

funone();//Global Vaariable print in function=(no print out $num1 ,cuz function will generate error)

echo "Global Vaariable print in outside" = $num1;//Global Vaariable print in outside= 100

function funtwo(){
    $num2= 200;//local variable
    echo "Local Variable print in function = $num2";//Local Variable print in function = 200
      
}

funtwo();
echo "Local Variable print in function = $num2";//Local Variable print in function = (no print out $num1 ,cuz function will generate error)

//=> global keywork

$num3 = 300;
$num4 = 400;
global $result;
function funthree(){
    global $num3;
    global $num4;
    // global $num3 ,$num4;
    $result = $num3+$num4;
    echo "This is result ,print by funthree=$result ";

}

funthree();//This is result ,print by funthree=700

echo "Local variabler print outside= $result";//ocal Variable print outside =700


//Super Global Variable

$num5 = 500;
$num6 =600;

function funfour(){
    $GLOBALS["sum"] = $GLOBALS['num5'] + $GLOBALS['num6'];
    echo 'This is sum print by funfour= $GLOBLAS["sum"]' ;//Undefined variable sum 
}
funfour();
echo "This is sum print by funfour= $sum";//his is sum print by funfour= 1100



//global keywork
$num =700;

function funfive(){
    global $num7;

    $num7++;
    echo $num7;
}

funfive();//701
funfive();//702
funfive();//703
funfive();//704



function funsix(){

    $num8=800;
    $num8++;
    echo $num8;
}

funsix();//801
funsix();//801
funsix();//801
funsix();//801


//static keywork
function funseven(){

   static $num9=900;// don't not start again 900 after second time call function
    $num9++;
    echo $num9;
}

funseven();//901
funseven();//902
funseven();//903
funseven();//904

// =>passing by reference(pr &

$num10 =100;

function funeight($num10){
    $num10=10000;
    echo $num10;
}

echo $num10;//100
funeight($num10);//10000
echo $num10;//100

$num11=110;
function funnine(&$num11){
    $num11= 11000;
    echo $num11;
}
echo $num11;//110
funnine($num11);//11000
echo $num11;//11000


$name = "aung aung";
$fullname ="Oo";
function funten(&$val){
    $val= "su su";
    echo $val;

}

echo $name;//aung aung
funten($name);//su su
echo $name;//su su
echo $name;//su su

echo $fullname;//Oo
funten($fullname);//su su
echo $fullname;//su su
?>