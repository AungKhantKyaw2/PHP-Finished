<?php

//Properties and Methods Visiablility 

//Visiability         Availability
//Public               Anywhere : inside other classes and object instances

//Private               inside the current class only
//Protected            Inside the currrent class and any subclass


class Classconstant{
    
    const NAME = "Honey Nway OO";
    const CITY = "Yangon";
    protected  const EMAIL = "aungkhantkyaw.didi@gmail.com";
    private const PASSWORD ="123456789";

    public function getinfo(){
        echo "Name is =" . self::NAME . " & She live in" . self::CITY ."<br/>";
    }

    public function getaccess(){
        echo "Email is =" . self::EMAIL . " & Password is " . self::PASSWORD ."<br/>";
    }
}

class Kit1  extends Classconstant{

}

class Kit2  extends Classconstant{

    public function getcontent(){
        echo "Name is ". self::NAME. "& She live in ". self::CITY. "<br/>";
    }
    public function getemail(){
        echo "Email is ". self::EMAIL . "<br/>";
    }
    // public function getpassword(){
    //     echo "Password is" . self::PASSWORD ."<br/>";
    // }

}



echo "This is Class Constant <br/>";
$obj = new Classconstant();
echo $obj::NAME."<br/>";
echo Classconstant::CITY. "<br/>"; 

// echo $obj::EMAIL ."<br/>";// error cuz it was protected
// echo Classconstant::PASSWORD. "<br/>";  //error cuz it's private

$obj->getinfo();//Name is =Honey Nway OO & She live inYangon
$obj->getaccess();//Name is =aungkhantkyaw.didi@gmail.com & She live in123456789

echo "<hr/>";

$kk1 = new Kit1();
echo $kk1::NAME ."<br/>";// Honey Nway OO
echo Kit1::CITY ."<br/>"; //Yangon

// echo $kk1::EMAIL ."<br/>";// error cuz it was protected
// echo Kit1::PASSWORD. "<br/>";  //error cuz it's 

$kk1->getinfo();
$kk1->getaccess();
echo "<hr/>";

$kk2 = new Kit2();
echo $kk2::NAME ."<br/>";// Honey Nway OO
echo Kit2::CITY ."<br/>"; //Yangon


// echo $kk2::EMAIL ."<br/>";// error cuz it was protected
// echo Kit2::PASSWORD. "<br/>";  //error cuz it's 

$kk2->getinfo();
$kk2->getaccess();

$kk2->getemail();
// $kk2->getpassword();.// Cause it was private.
echo "<hr/>";


?>