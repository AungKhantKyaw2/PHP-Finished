<?php

interface Greeting{
  public function speak();
}

class Myanmar implements Greeting{
   
     public function speak(){
       return "Mingalarpar";
     }

    
}

class Thailand implements Greeting{
   
  public function speak(){
    return "Sawadi!";
  }

 
}


class English implements Greeting{
   
  public function speak(){
    return "Hello";
  }

 
}


function results($objs){

    foreach($objs as $obj){
        echo $obj->speak(). "<br/>";
    }
}






echo "This is My polymorphism Concept with interface. <br/>";

$datas = [
    new Myanmar(),
    new Thailand(),
    new English()
];

results($datas);


echo "<hr/>";





