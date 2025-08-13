<?php


//Note:: Type hinting is concept that provides hits to function or method for the expected data type of arguments

// Advantages of type hinting 
        //helps users debug the code easily or the code provides error very specifically
        // a great concept for static kind of data

//Disadvantages of type hinting
   //function or method only take one type of data
   // the dynamic data or argument are not there
//Class Object


declare(strict_types=1);
ini_set('display_errors',1);

class Mytypehinting{

    public function getdata($val){
        // echo $val ."<br/>";
        echo "<pre>".print_r($val,true) ."</pre>";
    }
  

}


echo "This is My Type Hinting <br/>";

$obj1 = new Mytypehinting();
$obj1->getdata("aung aung"); //aung aung
$obj1->getdata("10");//10
$obj1->getdata(100);//100 
$obj1->getdata(25.68);//25.68
$obj1->getdata(true);//1 
$obj1->getdata(['red','green','blue']); //Array

echo "<hr/>";



class Typehunting2{
    
    public function getdata(string $val){
        echo $val ."<br/>";
    }
}

$obj2 = new Typehunting2();

$obj2->getdata("aung aung");
$obj2->getdata("10");
// $obj2->getdata(100);//error
// $obj2->getdata(25.68);//error
// $obj2->getdata(true);//error
// $obj2->getdata(['red','green','blue']);//error

echo "<hr/>";


class Typehunting3{
    
    public function getdata(int $val){
        echo $val ."<br/>";
    }
}

$obj3 = new Typehunting3();

// $obj3->getdata("aung aung"); //error
// $obj3->getdata("10"); //error
$obj3->getdata(100);//100
// $obj3->getdata(25.68);//25.68
// $obj3->getdata(true);//error
// $ob32->getdata(['red','green','blue']);//error



echo "<hr/>";
class Typehunting4{
    
    public function getdata(bool $val){
        echo $val ."<br/>";
    }
}

$obj4 = new Typehunting4();

// $obj4->getdata("aung aung"); //error
// $obj4->getdata("10"); //error
// $obj4->getdata(100);//100
// $obj4->getdata(25.68);//25.68
$obj4->getdata(true);//1
// $obj4->getdata(['red','green','blue']);//error


echo "<hr/>";

class Typehunting5{
    
    public function getdata(float $val){
        echo $val ."<br/>";
       
    }
}

$obj5 = new Typehunting5();

// $obj5->getdata("aung aung"); //error
// $obj5->getdata("10"); //error
// $obj5->getdata(100);//error
$obj5->getdata(25.68);//25.68
// $obj5->getdata(true);// 1 error
// $obj5->getdata(['red','green','blue']);//error


echo "<hr/>";

class Typehunting6{
    
    public function getdata(array $val){
        // echo $val ."<br/>";
        echo "<pre>".print_r($val,true) ."</pre>";
    }
}

$obj6 = new Typehunting6();

// $obj4->getdata("aung aung"); //error
// $obj4->getdata("10"); //error
// $obj4->getdata(100);//error
// $obj4->getdata(25.68);//error
// $obj4->getdata(true);//error
$obj6->getdata(['red','green','blue']);//array


echo "<hr/>";

class Typehunting7{
    
    public function total(array $arrs){
        $result =0;
        foreach($arrs as $arr){
            $result += $arr;
        }
        // echo "<pre>".print_r($val,true) ."</pre>";
        echo $result;
    }
       
}

$obj7 = new Typehunting7();
$obj7->total([10,20,30,40,50]);//150

echo "<hr/>";

class Phone{
    protected $brand;
    protected $hasfacesensor;
    protected $numberofsim;
    protected $price;


    public function setbrand(string $value){
        $this->brand =$value;
    }

    public function sethasfacesensor(bool $value){
        $this->hasfacesensor =$value;
    }

    public function setnumberofsim(int $value){
        $this->numberofsim =$value;
    }

    public function setprice(float $value){
        $this->price =$value;
    }

    public function getinfo(){
        echo "Brand name is = $this->brand <br/> Face Sensor =$this->hasfacesensor <br/> Number of SIM = $this->numberofsim <br/> Price is =$this->price"; 
    }
}


$objphone = new Phone();
$objphone->setbrand("Iphone");
$objphone->sethasfacesensor(true);
$objphone->setnumberofsim(2);
$objphone->setprice(999.68);

$objphone->getinfo();

echo "<hr/>";