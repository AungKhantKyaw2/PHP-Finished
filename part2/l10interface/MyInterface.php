<?php

ini_set('display_errors',1);
//Note:: Interface's methods can't include body
//Note:: Modifier must be public in Interface. cuz we need to override
//Note :: To use an interface, a class must use to impleemnts keyword.
// Note:: A Class that implements an interface must implements all of the interface's methods.
//Note :: Can't contain properties/ common methods but can contain constant variable.
interface News{
//    public $fullname = "aung aung";
   const CAPTION ="This is new article for SPORT";
    public function createpost();
    public function readpost($id);
    public function updatepost($id,$title);
    public function deletepost($id);

}


class Myinterface implements News{
 
    public function createpost(){
        echo "i am from create  post". self::CAPTION . "<br/>";
    }
    public function readpost($id){
        echo "i am from read  post. & id is = {$id}. <br/>";
    }
    public function updatepost($id,$title){
        echo "i am from update  post. & id is ={$id} . Title is {$title} . <br/>";
    }
    public function deletepost($id){
        echo "i am from delete  post . <br/>";
    }
    public function test(){
        echo "I am test";
    }
 

}
class Article implements News{
 
    public function test(){
        echo "I am test";
    }
    public function createpost(){
        echo "i am from create article post". self::CAPTION . "<br/>";
    }
    public function readpost($id){
        echo "i am from read article post. & id is = {$id}. <br/>";
    }
    public function updatepost($id,$title){
        echo "i am from update  article post. & id is ={$id} . Title is {$title} . <br/>";
    }
    public function deletepost($id){
        echo "i am from delete article post . <br/>";
    }
 

}

echo "This is Interface <br/>";

$obj = new Myinterface();
$obj->createpost();
$obj->readpost(10);
$obj->updatepost(10,"This is new post 10");
$obj->deletepost(10);
$obj->test();
echo "<hr/>";


$obj2 = new Article();
$obj2->createpost();
$obj2->readpost(10);
$obj2->updatepost(10,"This is new post 10");
$obj2->deletepost(10);
$obj2->test();
echo "<hr/>";

?>