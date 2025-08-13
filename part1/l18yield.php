<?php
//yield keyword


function funone(){
    yield "1";
    yield "2";
    yield "3";
    yield "4";
    yield 5;
}
$numbers =funone();


foreach($numbers as $number){
    echo $number." <br/>";//1 2 3 4 5
}



function funtwo(){
 $index=0;
 while($index <10){
    yield $index;
    $index++;
 }
}
$numbers =funtwo();


foreach($numbers as $number){
    echo $number." <br/>";//0 1 2 3 4 5 6 7 8 9
}

function funthree(){
    yield from [1,2,3,4,5];
    yield from [6,7,8,9];
    yield from [10];
}

$numbers =funthree();
foreach($numbers as $number){
    echo $number." <br/>";//1 2 3 4 5 6 7 8 9 1 2 3 4 5
}
?>


