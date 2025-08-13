<?php


//Class Object
class Magicmethods{
       
    public $num;
    private $name;
    protected $age;

    public function __construct($val)
    {
        //property_exists(classname,propertyname by string)
        if(property_exists('Magicmethods','num')){

            $this->num =$val;
            echo $this->num;

        }else{
            echo "Property doesn't exists";
        }
        
    }
}

class Mymagicone{

    public $greeting = "hello";

    public function __get($var)
    {
         echo "You do not yet defined this \"${var}\" property. <br/>";
    }

    public function __set($var, $val)
    {
        echo "You not yet defined this  \"${var}\" property. so your value \"${val}\" is can not set <br/>";
    }
}

class Mymagictwo{
        public function sayhi(){
            echo "Hello i am sayhi non-static method <br/>";
        }

        public static function saybye(){
            echo "Hello i am sayhi static method <br/>";
        }


        // for non-static method 
        public function __call($method,$vals)
        {
            // echo "You not yet defined this  \"${method}\" property. so your value \"${vals}\" is can not set <br/>";
             echo "You do not yet defined this \"${method}\" non-static method."."<pre>".print_r($vals,true)."</pre>";
        }
        // for static method 
        public static function __callStatic($method, $vals)
        {
            echo "You not yet defined this  \"${method}\" static method." ."<pre>".print_r($vals,true)."</pre>";   
        }
           
      
}

class Mymagicthree{


    public function __invoke()
    { 
       echo "Hello sir , i am working cuz you are trying to print out your class object as method.";  
    }
  
}


class Mymagicfour{
    public function __toString()
    {
        //    echo "Hello sir , i am working cuz you are trying to print out your class object.";  
        return "Hello sir , i am working cuz you are trying to print out your class object.";  
    }
}

echo "This is Magic Methods <br/>";

$obj1 = new Magicmethods(100);


echo "<hr/>";

$obj1 = new Mymagicone();
echo $obj1->greeting;
echo "<br/>";
echo $obj1->hifi;//   __get

$obj1->byebye = "Good Bye"; // __set

echo "<hr/>";

$obj2 =new Mymagictwo();
$obj2->sayhi();//Hello i am sayhi non-static method
$obj2->saybye();//Hello i am sayhi static method

$obj2->sayhifi();//You do not yet defined this "sayhifi" non-static method.
$obj2->sayhifi('greeting');//Array([0] => greeting)You do not yet defined this "sayhifi" non-static method.
$obj2->sayhifi('greeting', 'bye bye');//

$obj2::sayhaylo();
$obj2::sayhaylo('greeting');//Array([0] => greeting)You do not yet defined this "sayhifi" non-static method.
$obj2::sayhaylo('greeting', 'bye bye');
echo "<hr/>";

$obj3 = new Mymagicthree();
$obj3();
echo "<hr/>";

$obj4 = new Mymagicfour();
echo $obj4;

echo "<hr/>";

?>