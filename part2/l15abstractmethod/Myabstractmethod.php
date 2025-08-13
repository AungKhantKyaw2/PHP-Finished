<?php

ini_set('display_errors',1);
//Note:: Interface's methods can't include body
//Note:: Modifier must be public in Interface. cuz we need to override
//Note :: To use an interface, a class must use to impleemnts keyword.
// Note:: A Class that implements an interface must implements all of the interface's methods.
//Note :: Can't contain properties/ common methods but can contain constant variable.

//Note:: Abstract method can't include body
//Note:: Any Modifier can set in abstract
//Note :: To use an abstract, a class must use to extendd keyword.
// Note:: A Class that extends an sub class must extend all of the abstract's methods.
//Note :: Can contain non static properties/ static properties/ common methods but can contain constant variable.
//Note:: When we set abstract method !!! class must be abstract class as well


//Class Object
abstract class Myabstractmethod{
        public $id =50;
        public static $notifi="New Article Created";
        const TITLE ="This is a new article for SPORT";

        //Commom Method
      public function createpost(){
        echo "I am form create post. Post title is =" .self::TITLE . "<br/>";

      }

      public function readpost(){
        echo "I am read post . ID is =".$this->id ."<br/>";
      }

     abstract public function updatepost(int $id,$title);

      public function deletepost($id){
        echo "I am deletepost. ID is ={$id}" ."<br/>";
      }

}

class Article extends Myabstractmethod{

    public function updatepost( $id,$title)
    {
        echo "i am from update . ID is {$id}. Title is {$title}.<br/>";
    }
}
 


echo "This is Abstract Method. <br/>";

// ERROR: : we can't insstantiate abstract class
// $obj1 = new Myabstractmethod();

$obj2 = new Article();
echo $obj2->id; //50
echo "<br/>";
echo $obj2::$notifi;// New Article Created
echo "<br/>";
echo $obj2::TITLE;  // This is a new article for SPORT
echo "<br/>";

$obj2->createpost();//I am form create post. Post title is =This is a new article for SPORT
$obj2->readpost();//I am read post . ID is =50

$obj2->updatepost(20,"This is post 20");//i am from update . ID is 20. Title is This is post 20.
$obj2->deletepost(100);//I am deletepost. ID is =100

echo "<hr/>";


abstract class Intro{
  abstract protected function name();
  abstract protected function age();
  abstract protected function professional($gender);

  public function getname(){
    return $this->name();
  }
  public function getage(){
    return $this->age();
  }
  public function getprofessional($sex){
    return $this->professional($sex);
  }
}

class Boyclass extends Intro{
   public function name(){
      return "Mr. Aung";
    }
    public function age(){
      return 20;
    }
    public function professional($gender){
          switch($gender){
             case "male";
              $job ="Engineer";
              break;
             case "female";
             $job ="Doctor";
             break;
             default: 
               $job ="Developer" ;
               break;
          }

          return $job;
    }

}

class Girlclass extends Intro{
  protected function name(){
     return "Mr.July";
   }
   protected function age(){
     return 30;
   }
   public function professional($gender){
         switch($gender){
            case "male";
             $job ="Engineer";
             break;
            case "female";
            $job ="Doctor";
            break;
            default: 
              $job ="Developer" ;
              break;
         }

         return $job;
   }

}

$boyobj = new Boyclass();
$boyname = $boyobj->name();
$boyage =$boyobj->age();
$boypro = $boyobj->professional('male');

echo "${boyname} is {$boyage} year old & he is an {$boypro} . <br/> ";



//Error
// $girlobj = new Girlclass();
// $girlname = $girlobj->name();
// $girlage =$girlobj->age();
// $girlpro = $girlobj->professional('male');

// echo "${girlname} is {$girlage} year old & he is an {$girlpro} . <br/> ";

$girlobj = new Girlclass();
$girlname = $girlobj->getname();
$girlage =$girlobj->getage();
$girlpro = $girlobj->getprofessional('male');

echo "${girlname} is {$girlage} year old & he is an {$girlpro} . <br/> ";
?>