<?php
ini_set('diplay_errors',1);

echo "This is call_user_func_array() .<br/>";


function funone($num1,$num2){
    echo __FUNCTION__ ."values are {$num1} and {$num2} <br/>";
}

funone(10,20); // funone values are 10 and 20


//call_user_func_array(callback,array)
call_user_func_array("funone",[100,200]);//funonevalues are 100 and 200
call_user_func_array("funone",array(1000,2000));//funonevalues are 1000 and 2000


class Hifi{
    function funtwo($num1,$num2){
        echo __METHOD__."values are {$num1} and {$num2} <br/>";
    }


}

$obj = new Hifi();
$obj->funtwo(300,400);//Hifi::funtwovalues are 300 and 400

//call_user_func_array([class,method],array)
call_user_func_array([$obj,"funtwo"],[300,400]);//Hifi::funtwovalues are 300 and 400
call_user_func_array([$obj,"funtwo"],array(3000,4000));//Hifi::funtwovalues are 300 and 400


echo "<hr/>";
?>