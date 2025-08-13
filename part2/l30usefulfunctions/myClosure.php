<?php

ini_set('display_errors',1);


echo "This is Lambda FUnction (also know as anonymous function or closure). <br/>";



$num1 =300; //Global Variable
$num2 =400;

function myfunone(){
  global $num1 ,$num2;
  echo "This is Regular function. My getting values are= ".$num1+$num2."<br/>";
}

myfunone();// This is regular function. My getting values are =700


$myfuntwo = function() use($num1,$num2){
    echo "This is Closure function. My getting values are =".$num1+$num2."<br/>";
};

$myfuntwo();//


function myfuncall($closurefun){
  $closurefun();
}


myfuncall(function() use($num1,$num2)
{
  echo "This is Closure function. My getting values are =".$num1+$num2."<br/>";
});


//=> Closure function with array_walk(array,callback,parameter)



$numbers=[1,2,3,4,5,6,7,8,9,10];

$totalresult = 0;

$calculatefun = function($num) use(&$totalresult){
    $totalresult += $num;
    echo $totalresult ."<br/>";
};

array_walk($numbers,$calculatefun);

echo "Total sum result is =" .$totalresult;










//=> Lambda stylewith array_walk(array,callback,parameter)
$colors =array("a"=>"red","b"=>"green","c"=>"blue","d"=>"white", "e"=>"black");
$idx =0;

array_walk($colors,function($val,$key,$per) use($idx){
    $idx++;
    echo "Index is {$idx}, Key is = {$key} and value is {$val}{$per}<br/>";
},"colour");


echo "<hr/>";
?>