<?php


// Same Method name has different implementation of that method 
class Language{

      public  $name;
      public $citizen;
      public function __construct($val1,$val2)
      { 
        $this->name =$val1;
       $this->citizen= $val2;
      }

      public  function speak(){
        echo "Say Something...... <br/>";
      }


}

class Burmese extends Language{
    public function speak(){
        echo "Hello Mingalarpar...... <br/>";
      }

}
class Thai extends Language{
    
    public function speak(){
        
        echo "Hello Sawadikap...... <br/>";
      }

}




echo "This is My polymorphism. <br/>";

$obj1 = new Burmese("Aung Aung","Burmese");
echo $obj1->name;
echo "<br/>" ;
echo $obj1->citizen;
echo "<br/>" ;
$obj1->speak();
echo "<hr/>";

$obj2= new Thai("Aung Aung krap","Thai");
echo $obj2->name;
echo "<br/>" ;
echo $obj2->citizen;
echo "<br/>" ;
$obj2->speak();
echo "<hr/>";




