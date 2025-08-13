<?php

abstract class Vehicle{
   abstract public function start();
   abstract public function stop();
}


class Car extends Vehicle{
   
     public function start(){
      echo "Car Started <br/>";
     }

     public function stop(){
      echo "Car stopped <br/>";
     }
}


class Ebike extends Vehicle{

    public function start(){
        echo "Ebike started <br/>";
      }
      public function stop(){
        
        echo "Ebike stopped <br/>";
        }

}





echo "This is My polymorphism Concept with abstract. <br/>";

$obj1 = new Car();
$obj1->start();//Car Started
$obj1->stop();//Car stopped

$obj2 = new Ebike();
$obj2->start();//Car Started
$obj2->stop();//Car stopped


echo "<hr/>";





