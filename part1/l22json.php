<?php
 
// json_encode(array);
// json_decode(array);
// json_decode(array, true);  // result associative array



$colors =['red','green','blue'];
// echo $colors;
var_dump($colors);
echo "<hr/>";

$mycolors=json_encode($colors);
echo $mycolors; //=>Arrayarray(3)["red","green","blue"]
echo "<hr/>";
var_dump($mycolors); //=>string(22) "["red","green","blue"]"

echo "<hr/>";
$students=["name"=>"Maung Maung","age"=>20,"city"=>"Mawlamyine"];
var_dump($students); //=>array(3) { ["name"]=> string(9) "Maung Maung" ["age"]=> int(20) ["address"]=> string(10) "Mawlamyine" }
echo "<hr/>";
echo $students["name"]; //=>Maung Maung
echo $students["age"]; //=>20
echo $students["city"]; //=>Mawlamyine

// can't print
// echo $studentinfo["name"];
//echo $studentinfo["age"];
//echo $studentinfo["city"];
$studentinfo= json_encode($students);
echo $studentinfo;
echo "<hr/>";// {"name":"Maung Maung","age":20,"city":"Mawlamyine"}
var_dump($studentinfo);//string(51) {"name":"Maung Maung","age":20,"city":"Mawlamyine"}
echo "<hr/>";
// can't print
// echo $studentinfo["name"];
//echo $studentinfo["age"];
//echo $studentinfo["city"];


// Decode by single parameter

$studentdatas='{"name":"Maung Maung","age":20,"city":"Mawlamyine"}';
$studentdecode=json_decode($studentdatas);
var_dump($studentdecode);//object(stdClass)#1 (3) { ["name"]=> string(9) "Maung Maung" ["age"]=> int(20) ["city"]=> string(10) "Mawlamyine" }
echo "<hr/>";
// can't print
// echo $studentinfo["name"];
//echo $studentinfo["age"];
//echo $studentinfo["city"];

// can print (object(stdClass) (->object operator))

echo $studentdecode->name; //=>Maung Maung
echo $studentdecode->age; //=>20
echo $studentdecode->city; //=>Mawlamyine


foreach($studentdecode as $key => $value) {
    echo $key . " is " . $value . "<br>";
}
echo "<hr/>";
//=>Decode by multi parameter


$staffdatas='{"name":"Maung Maung","age":20,"city":"Mawlamyine"}';
$staffdecode=json_decode($staffdatas,true);
var_dump($staffdecode);//array(3) { ["name"]=> string(9) "Maung Maung" ["age"]=> int(20) ["city"]=> string(10) "Mawlamyine" }

// can't print
// echo $studentinfo["name"];
//echo $studentinfo["age"];
//echo $studentinfo["city"];


// can print (array)
echo $staffdecode["name"]; //=>Maung Maung
echo $staffdecode["age"]; //=>20
echo $staffdecode["city"]; //=>Mawlamyin


?>


