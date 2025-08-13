<?php


//=> Check Variable Type
// =>is_string(variable) Function 

$val1 = "Save Myanamarr";
echo "val1 is" . is_string($val1); 
echo var_dump($val1);//string(12) "Save Myanamr"
echo gettype($val1);//string
STDIN
Output:

val1 is1string(12) "Save Myanamr"
string
$val2 = 0;
echo "val2 is" . is_string($val2); 

$val3 = 50;
echo "val3 is" . is_string($val3); 

$val4 = "50";
echo "val4 is" . is_string($val2); 

$val5 = true;
echo "val5 is" . is_string($val5);

$val6 = " ";
echo "val6 is" . is_string($val6);


// => is_numeric(variable) Function

$val7 =50;
echo "val7 is" . is_numeric($val7);//1
echo "val7 is" . is_int($val7);//1
echo "val7 is" . is_integer($val7);//1
echo gettype($val7); //Integer


$val8 =34.56;
echo "val8 is" . is_numeric($val8);//1
echo "val8 is" . is_int($val8)
echo "val8 is" . is_integer($val8);
echo gettype($val8); //double (more decimal space)
echo gettype($val8);//Float


$val9 ="50";
// *************
echo "val9 is" . is_numeric($val9);//1
echo "val9 is" . is_int($val9)
echo "val9 is" . is_integer($val9);


// is_float(variable) Function

$val9 =40;
echo "val 9 is". is_float($val9);
$val9 =34.56;
echo "val 9 is". is_float($val9);//1
$val111 ="34.56";
echo "val 9 is". is_float($val111);


// => is_bool(variable) Function
$val12 =true;
echo "val12 is" . is_bool($val12);//1
echo gettype($val17); //boolean

$val13 =FALSE;
echo "val13 is" . is_bool($val13);//1

$val14 =1;
echo "val14 is" . is_bool($val14);

$val15 ="true";
echo "val15 is" . is_bool($val15);


// => is_array(variable) Function

$val16= "Help Myanmar";
echo "val16 is" . is_array($val16);

// $val17 =["aung aung","su su"];
$val17 =array("aung aung","su su");
echo "val17 is" . is_array($val17);
echo gettype($val17);//array


// => is_null(variable) Function

$val18 = 0;
echo "val18 is" . is_null($val18);

$val19 = null;
echo "val18 is" . is_null($val19);//1

$val20 = Null;
echo "val18 is" . is_null($val20);//1
$val21 = NULL;
echo "val18 is" . is_null($val21);//1

$val22 = "null";
echo "val22 is" . is_null($val22);



// => empty(variable) vs isset(variable)
// Note:: the following values are empty
//0
//  0.0
//  "0"
//  ""
//  NULL
//  FALSE
//  []

$val21=[];

if(empty($val21)){
    echo "Your variable is empty";
}else{
    echo "Your variable is not empty";
}

if(isset($val21)){             //check have value
    echo "Your variable with value";
}else{
    echo "Your variable without value";
}


//=> isset() vs unset()

// $city;
$city = "Yangon";
$country ="Thailand";

echo  isset($city) ? "Yes" : "No";
echo $city;//Yangon
echo $country;//Thailand

unset($city,$country);//remove variable

echo $city;//error
echo $country;//error

 ?>

