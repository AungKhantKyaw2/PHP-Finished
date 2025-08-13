<?php

ini_set('dispaly_error',1);

//Class Object  
// Parent class // Main class // Super class 

//Note :: define() not working in claas method
class Myinheritance{


  //Properties / Member properties
  public $fullname = "Sandar";
  public $city ="Yangon";
  public $password = "123456";
  public $email = "sandar@gmail.com";
  

  //Methods / Member Methods / Own Method
  public function getaccess(){
      echo "This is site login: email is $this->email & password is $this->password. <br/>";

  }
  public function getinfo(){
     echo "Name is  $this->fullname & city is $this->city. <br/>" ;
  }

}


//Child Class
class Devlogin extends Myinheritance{

  //Member Method / Own Method
  public function githublogin(){
    echo "This is github login: email is $this->email & password is $this->password.";

  }


}
class Sociallogin extends Myinheritance{

  
  public function gmaillogin(){
    echo "This is gmail login:email is $this->email. Profile name is $this->fullname . <br/>";
  }
  public function facebooklogin(){
    echo "This is facebook login: email is $this->email.  Profile name is $this->fullname .<br/>";
  }

  public function getinfo(){

    // Properties overwritting
    $this->fullname= "Hsu Myat Yadanar Hlaing Wint Kyaw Tun";
    $this->city ="Bago";

    echo "Name is $this->fullname & City is $this->city. <br/>";
  }
}


class Locallogin extends Sociallogin{
   public function sitelogin(){
    echo "This is sitelogin login :email is $this->email. Profile name is $this->fullname. <br/> ";
   }
}
echo "This is Inheritance <br/>";

$obj = new Myinheritance();
echo $obj->fullname . "<br/>";
$obj->getaccess();
$obj->getinfo();

echo "<hr/>";

$devobj = new Devlogin();
echo $devobj->fullname . "<br/>";
$devobj->getaccess();
$devobj->getinfo();
$devobj->githublogin();


echo "<hr/>";

$solobj = new Sociallogin();
echo $solobj->fullname . "<br/>";
$solobj->getaccess();
$solobj->getinfo();

// $solobj->githublogin();//error
$solobj->gmaillogin();
$solobj->facebooklogin();

$solobj->getinfo();

echo "<hr/>";

$lcobj = new Locallogin();
echo $lcobj->fullname . "<br/>";
$lcobj->getinfo();

echo "<hr/>";
?>