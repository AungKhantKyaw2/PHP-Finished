<?php

class Constantvsproperties{

       const ARTICLE = "This is new article for SPORT";
       const TOPIC = "This is new topic fpr SPORT";

       public $post = "This is new post for SPORT.";


       public function contentone(){
        echo self::ARTICLE ."<br/>";
        echo static::TOPIC ."<br/>";

        echo $this->post ."<br/>";
       }
 }
class Baby1 extends Constantvsproperties{

    const ARTICLE = "This is new article for POLITICAL";
    const TOPIC = "This is new topic for POLITICAL";

    public $post = "This is new post for POLITICAL.";


    public function contenttwo(){
     echo self::ARTICLE ."<br/>";
     echo static::TOPIC ."<br/>";

     echo $this->post ."<br/>";
    }
}
 echo "This Constant vs Properties. <br/>";

 $obj = new Constantvsproperties();

$obj->contentone();
// This is new article for SPORT
// This is new topic fpr SPORT
// This is new post for SPORT

echo "<hr/>";

$bb1 = new Baby1();
$bb1->contentone();

echo "<hr/>";

// This is new article for SPORT
// This is new topic for POLITICAL
// This is new post for POLITICAL.
$bb1->contenttwo();
// This is new article for POLITICAL
// This is new topic for POLITICAL
// This is new post for POLITICAL.
echo "<hr/>";
?>