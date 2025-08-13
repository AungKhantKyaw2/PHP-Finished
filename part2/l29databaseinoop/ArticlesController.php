<?php

require_once("Article.php");

$articleobj= new Article();

//=>Read


// echo "<pre>" .print_r($articles->getarticles(),true)."<pre>";
// var_dump($articleobj->getarticles());

// var_dump($articleobjs->getarticlebyid(1));


//=>Insert
// $data=["title"=>"this is new article 13","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>4];

// $articleobj->insertarticle($data);

// var_dump($articleobj->getarticles());

//=>Update
// $data=["id"=>11,"title"=>"this is new article 13","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>6];

// $articleobj->updatearticle($data);

// var_dump($articleobj->getarticles());

//=>Delete
  $articleobj->deletearticle(10);
  var_dump($articleobj->getarticles());

?>