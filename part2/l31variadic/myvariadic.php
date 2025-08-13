
<?php

ini_set('display_errors',1);


//(...)Spread Operator(used in javascript)
//(...)Splat Operator (used in Python)
//=> Splat Operator (...)

echo "This is Variadic Function. <br/>";

function getval($val1,$val2,$val3){
    echo "Val1 result is = {$val1} <br/>";
    echo "Val2 result is = {$val2} <br/>";
    echo "Val3 result is = {$val3} <br/>";
}

getval("su su","nu nu","yu yu");//Val1 result is = su su Val2 result is = nu nu Val3 result is = yu yu
// getval(["red","green","blue"]); //error
getval(...["red","green","blue","white"]);//Val1 result is = red Val2 result is = green Val3 result is = blue


function sumresult($num1,$num2,$num3){
    return $num1+$num2+$num3;
}

echo sumresult(1,2,3);//6
echo "<br/>";

// echo sumresult([1,2,3]); // error

echo sumresult(...[1,2,3]);//6
echo "<br/>";
echo sumresult(...[1,2,3,4]);//6

echo "<hr/>";

//=>func_get_args()
function totalresult(){
    $arrs = func_get_args();
    // echo $arrs; //Array
    echo "<pre>" .print_r($arrs,true)."</pre>";
    echo count($arrs);//3

    $total =0;

//     for($x=0; $x<count($arrs); $x++){
//         $total +=$arrs[$x];
//     }
//    echo "<br/>";
//     return $total;

//     foreach($arrs as $arr){
//         $total +=$arr;
//     }
//     echo "<br/>";
//     return $total;
echo "<br/>";
return array_sum($arrs);
}


totalresult(10,20,30);
echo totalresult(10,20,30); //60

echo "<br/>";

//=>Splat Operator in Array
$phones=["apple","oppo","vivo","samsung"];
$cars=["toyota","suzuki","mazda"];
$computers =["mac","aoc","acer"];

$myowns = [$phones,$cars,$computers];
echo "<pre>".print_r($myowns,true)."</pre>";//multi dimensional array

$yourowns = [...$phones,...$cars,...$computers];
echo "<pre>".print_r($yourowns,true)."</pre>"; // manaual array

echo "<hr/>";

function myfunone($val){
     return $val ."<br/>";
}

echo myfunone("mango");//mango
echo myfunone("mango","orange","apple"); //mango

function myfuntwo(...$val){
    return $val;
}

// echo myfuntwo("mango");//Array
echo "<pre>".print_r(myfuntwo("mango"),true)."</pre>";
echo "<pre>".print_r(myfuntwo("mango","orange","apple"),true)."</pre>";
echo "<pre>".print_r(myfuntwo(100,200,300),true)."</pre>";
echo "<pre>".print_r(myfuntwo(["red","green","blue"]),true)."</pre>";// multi dimension array
echo "<pre>".print_r(myfuntwo(["red","green","blue"],["fish","cat","dog"]),true)."</pre>";// multi dimension array
echo "<pre>".print_r(myfuntwo("mango","orange","apple",["red","green","blue"],["fish","cat","dog"]),true)."</pre>";


function myfunthree(...$val){
    echo $val[1] . "<br/>";
}

myfunthree("su su","nu nu", "yu yu");//nu nu
myfunthree(["su su","nu nu", "yu yu"],"red","green","blue");//red

function myfunfour(...$val){
    echo $val[2] .$val[0][2] .$val[1]. "<br/>";
}

myfunfour(["su su","nu nu","yu yu"]," is my elder sister","Ms."); //is my elder sister

function myfunfive(string $name,int ...$age):string{
     return "{$name} is {$age[0]} years old <br/>";
}
echo myfunfive("su su", 25);

function myfunsix(int ...$numbers):int{
       return array_sum($numbers);
}
echo myfunsix(1,2,3);//6
echo "<br/>";

function sayhi($greeting, ...$names){
       foreach($names as $name){
        echo "{$greeting},$name ! <br/>";
       }
}

sayhi("Hello","su su","nu nu","yu yu");

echo "<hr/>";


//Coalescing Operator

function myfunseven(...$val){
     echo $val[1] ? "Valid Data" :" No Data";
     echo "<br/>";
     echo $val[1] ?? "No Data";
}

myfunseven("Hello World","Dream World");//Valid Data Dream World
myfunseven("Hello Wrold");//No Data

echo "<hr/>";
?>