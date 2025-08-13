<?php
   
//=> Constant variable

// define('variablename','value');
// string/int/boolean//float  oki
//variable name should be in uppercase
//redefine are deny


define('FULLNAME','Honey Nway Oo');
echo FULLNAME; //=> Honey Nway Oo

// define('FULLNAME','Ma Ma Mya');
// echo FULLNAME; //=> Honey Nway Oo


define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","123456");
define("DB_NAME","mydb");

echo DB_HOST;
echo "<br/>"; 
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echo DB_NAME;
echo "<br/>";

//=>constant("variablename") Function

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_PASS");
echo "<br/>";
echo constant("DB_NAME");
echo "<br/>";


//constant : const keyword
//string/int/boolean//float  oki
//variable name should be in uppercase
//redefine are deny

const MESSAGE ="Hello sir, are you aready to learn PHP OOP concept?";
echo MESSAGE;
echo constant('MESSAGE');


// const MESSAGE ="Hello sir, are you aready to learn javascript ES6concept?";
// echo MESSAGE;
// echo constant('MESSAGE');



?>