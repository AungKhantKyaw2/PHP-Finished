
<?php

class Myfinalkeyword{
    
  public $fullname = "Aung Kyaw Kyaw";
  public $city ="Mandalay";
  public $password = "98765";
  public $email = "aungkyawkyaw@gmail.com";
  

  public function getaccess(){
      echo "This is site login: email is $this->email & password is $this->password. <br/>";

  }

//   Note :: final keywork is used for restrict method and class not to share with child class
 final public function getinfo(){
     echo "Name is  $this->fullname & city is $this->city. <br/>" ;
  }

}
class Developerlogin extends Myfinalkeyword{
    public function gitlablogin()
{
    echo "This is gitlab login : email is $this->email . Profile is $this->fullname . <br/>";
}

//   public function getinfo(){
//     echo "Name is  $this->fullname & city is $this->city. <br/>" ;
//   }
}


echo "This is final keyword <br/>";

$obj1 = new Myfinalkeyword();
echo $obj1->fullname;
$obj1->getaccess();
$obj1->getinfo();

echo "<hr/>";

$obj2 = new Developerlogin();
echo $obj2->fullname ."<br/>";
$obj2->gitlablogin();
$obj2->getinfo();

echo "<hr/>";

?>