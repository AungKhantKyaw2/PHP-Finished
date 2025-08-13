<?php
//   Super Global Variables 

// 1.$GLOBALS
// 2.$_SERVER
// 3.$_REQUEST
// 4.$_POST
// 5.$_GET
// 6.$_FILES
// 7$_ENV
// 8$_COOKIE
// 9.$_SESSION


// =>1.$GLOBALS
$x=100;
$y=200;
//*error
// function sumresultone(){
//     $total = $x+$y;
//     return $total
// }
// echo sumresultone();
// echo total;

function sumresultone(){
    $GLOBALS['total']= $GLOBALS['x'] +$GLOBALS['y'];
    return $GLOBALS['total'];
}

echo sumresultone();//300
echo $GLOBALS['total'];//300
echo $total;//300

echo "<hr>";
// =>2.$_SERVER

echo $_SERVER["PHP_SELF"];//HelloWorld.php
echo "<hr/>";
echo $_SERVER["HTTP_USER_AGENT"];//
echo "<hr/>";
 echo $_SERVER["HTTP_HOST"];//127.0.0.1
 echo "<hr/>";
echo $_SERVER["SERVER_NAME"];//localhost (Return the name of the server = eg: www.yourdomain.com)
echo "<hr/>";
echo $_SERVER["SERVER_SOFTWARE"];//Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30
echo "<hr/>";
echo $_SERVER["SERVER_PORT"];//80
echo "<hr/>";
echo $_SERVER["SERVER_PROTOCOL"];//HTTP/1.1
echo "<hr/>";
echo $_SERVER["SERVER_SIGNATURE"];//Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30 Server at 127.0.0.1 Port 80

echo "<hr/>";
echo $_SERVER["REQUEST_METHOD"];//GET
echo "<hr/>";
echo $_SERVER["REMOTE_ADDR"];//127.0.0.1
echo "<hr/>";
echo $_SERVER["SCRIPT_FILENAME"];//C:/xampp/htdocs/PHP/part1/l12supervariable.php
echo "<hr/>";
echo $_SERVER["SCRIPT_NAME"];//PHP/part1/l12supervariable.php
echo "<hr/>";
echo $_SERVER["QUERY_STRING"];//http://127.0.0.1/PHP/part1/l12supervariable.php?aung%20&%20Kyaw
echo "<hr/>";
?>