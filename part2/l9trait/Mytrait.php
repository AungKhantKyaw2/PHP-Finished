<?php

ini_set('display_errors',1);

trait Sitelogin{
    public $fullname = "Honey Nway Oo";
    public $email = "honey@gmail.com";
    public $password ="123456";

    public function useraccess()
{
  echo "This is site login. Email is $this->email & password is $this->password.<br/>";
}
   public function userinfo(){
    echo "Profile is $this->fullname. <br/>"; 
   }
}

trait Devlogin{
      public function githublogin(){
        echo "This is Github login. Email is $this->email & Password is $this->password.<br/>";
      }
}


class Googleauth{
//Method3 
   use Sitelogin,Devlogin;
     public function gmaillogin(){
      
      echo "This is Gmail login . Email is $this->email  & Password is $this->password.<br/>";
     }
}

trait Mastertrait{
    
    use Sitelogin,Devlogin;
}

//Class Object
class Mytrait extends Googleauth{
    
  //Method 1
  use Sitelogin;
  use Devlogin;

  //Method2
  // use Sitelogin,Devlogin;

  //Method 4
  // use Mastertrait;
  
}
echo "This is Trait <br/>";

$obj = new Mytrait();
$obj->gmaillogin();
echo $obj->fullname ."<br/>";
echo $obj->email ."<br/>";
echo $obj->password ."<br/>";
$obj->useraccess();
$obj->userinfo();
$obj->githublogin();
echo "<hr/>";

//$ggo=new Googleauth();
//$ggo->gmaillogin();//This is Gmail login Email is & Password is 



?>