<?php

// Using PDO(PHP Data Object)

$dbhost="localhost";
$dbuser = "root";
$dbpass="123456";
$dbname ="phpdbfive";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbuser,$dbpass);
}catch(PDOException $e){
   echo "Error Found :" . $e->getMessage();
}





?>