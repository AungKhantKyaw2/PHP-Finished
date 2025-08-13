
<?php

echo "config file is working <br/>";
//AppName
define('APPNAME','PHP OOP Project');

//Root URL
define('URLROOT','http://127.0.0.1/PHP/part4/'); 

//APP URL 
// echo __FILE__; //C:\xampp\htdocs\PHP\part4\app\config\config.php
// echo dirname(__FILE__);//C:\xampp\htdocs\PHP\part4\app\config\
// echo dirname(dirname(__FILE__));//C:\xampp\htdocs\PHP\part4\app\

define('APPURL', dirname(dirname(__FILE__)));

//DB Access

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','123456');
define('DB_NAME','phpdbsix');

?>