<?php


//Class Object
class Magicconstants{

    public function getclassname1(){
        echo __CLASS__ ."<br/>";
    }

    public function getclassname2(){
        echo __CLASS__."<br/>";
    }
   
    public function getmthname1(){
        echo __METHOD__ ."<br/>";
    }
    public static function getmthname2(){
        echo __METHOD__ . "<br/>";
    }

    public function getdir(){
        echo __DIR__ ."<br/>";
    }

    public function getfile(){
        echo __FILE__."<br/>";
    }

    public function getline(){
        echo __LINE__."<br/>";
    }
}

trait Mytrait{
     public $email ="honey@gmail.com";
     public $password= "123456";

     //__TRAIT__ must be in parent trait
     public function gettrait(){
        echo __TRAIT__."<br/>";
     }
}

class Authlogin{
    use Mytrait;

    public function login(){
        echo "This is user login .Email is $this->email & password is $this->password. <br/>";
    }
}

echo "This is Magic Constants <br/>";

$obj = new Magicconstants();

$obj->getclassname1();
$obj->getclassname2();

$obj->getmthname1();
$obj->getmthname2();

$obj->getdir();
$obj->getfile();
$obj->getline();


echo "<hr/>";

$obj2= new Authlogin();
$obj2->login();
$obj2->gettrait();


echo "<hr/>";
