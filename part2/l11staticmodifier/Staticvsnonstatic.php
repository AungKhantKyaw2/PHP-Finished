<?php


class Staticvsnonstatic{

    //Member variables

    // Non-static property
    public $fullname = "Honey Nway Oo";

    //Static porperty
    public static $city = "Yangon";

    //Constant 
    const GENDER = "Female";


    //Member Methods
    // Non-static method can call static property and Non-static property
    // Non-static method can call static method and Non-static method

    // static method can not call  Non-static property but constant can call
    // Non-static method can not call Non-static method

    //Non-Static method

    public function getname(){
        echo "I am Non-static method <br/>";

        echo "Name is $this->fullname <br/>";
    }
    public function getcity(){
        echo "I am Non-static method <br/>";

        echo "City is ".self::$city."<br/>";
    }

    public function getgender(){
        echo "I am Non-static method <br/>";

        echo "Gender is ".self::GENDER."<br/>";
    }

    public function car(){
        echo "I am Non-static method <br/>";

        $brand = self::carbrand();

        echo  "I bought a new ${brand} car. <br/>";


    }
    
    public static function carbrand(){
        return "Toyota LEXUS LX570";
    }

    public function mobilebrand(){
        return "iPhone 16 Pro Max <br/>";


    }
    public function beforebuy(){
        echo "I am Non-static method <br/>";

        $brand = $this->mobilebrand();
        echo "I am thinking about to buy a new ${brand} .<br/>";

    }

    //Static Methid
    public static function getstaticcity(){
        echo "I am Non-static method <br/>";

        echo "City is " .self::$city ." & home town is ".self::$city."<br/>";
    }
    public static function getstaticgender(){
        echo "I am Non-static method <br/>";

        echo "Gender is "  .self::GENDER."<br/>";
    }


}

echo "This is static vs Non-static Modifier <br/>";

$obj = new Staticvsnonstatic();
echo $obj->fullname;//
echo "<br/>";

echo $obj::$city;//Yangon
echo "<br/>";
echo Staticvsnonstatic::$city;
echo "<br/>";

echo $obj::GENDER;
echo "<br/>";
echo Staticvsnonstatic::GENDER;
echo "<br/>";

echo "<hr/>";

//Non static method
$obj->getname();
$obj->getcity();
$obj->getgender();


//Static Method 
$obj::getstaticcity();
$obj::getstaticgender();

Staticvsnonstatic::getstaticcity();
Staticvsnonstatic::getstaticgender();
echo "<hr/>";

$obj->car();//I bought a new Toyota LEXUS LX570 car.

$obj->beforebuy();//I am thinking about to buy a new iPhone 16 Pro Max.
?>

