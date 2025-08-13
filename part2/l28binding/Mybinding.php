<?php


//=>Data Binding
    //(i) Static Binding (or) Early Binding
    //(ii)Dynamic Binding (or) Late Binding (or) Late Static binding

    //(i) Static Binding (or ) Early binding
        //compile time(self keyword)

        //Bind everything before program running
        //index.php > Compile > Execute
        //echo 1+1    10101110    2
        //echo 1+1    10101110    2
        //echo 1+1    10101110    2

    
    //(ii) Dynamic Binding (or) Late binding (or) Late Static binding
        //run time (static keyword)
        //index/php > Transpile > EXecute
        // echo 1 +1   10101110     2

//Class Object
class hola1{

   public $name ="Ko Ko";

   public function friend(){
    return "My best friend name is ". $this->name. "<br/>";

   }

   public function getfriend(){
    echo $this->friend();
   }

}

class hola2 extends hola1{
    public function friend()
    {
        return "My best friend name is ". $this->name. " and Su SU.<br/>";
    }
}

echo "This is My binding <br/>";

$obj1 = new hola1();
echo $obj1->friend();//My best friend name is Ko Ko
$obj1->getfriend();//My best friend name is Ko Ko


$obj2 = new hola2();
echo $obj2->friend();//My best friend name is Ko Ko and Su SU.
echo $obj2->getfriend();//My best friend name is Ko Ko and Su SU.

echo "<hr/>";



class hola3{
     public static $name ="Ko Ko";

     public static function friend(){
        return "My best friend name is".self::$name."<br/>";
     }

     public static function getfriend(){
        // echo self::friend();
        echo static::friend();
     }

}

class hola4 extends hola3{
     public static function friend(){
           return "My best friend name is".self::$name."and Yu Yu<br/>";
     }

    //  //Overwrite
    //  public static function getfriend(){
    //    echo self::friend();
 
    //  }
     
}

$obj3 = new hola3();
echo $obj3::friend();//My best friend name isKo Ko
$obj3::getfriend();//My best friend name isKo Ko


$obj4= new hola4();
echo $obj4::friend();//My best friend name isKo Koand Yu Yu
$obj4::getfriend();//My best friend name isKo Ko



echo "<hr/>";