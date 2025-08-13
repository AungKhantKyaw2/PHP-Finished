<?php


ini_set("display_errors",1);

//=>(i)MySQLi Procedural

    //  =>DB Connect 
    // mysqli_connect(servername,dbusername,dbpassword,dbname); 

    // $conn= mysqli_connect("localhost","root","123456","phpone");


    // (ii) MySQLi Object-Oriented 
     
     // new mysqli(servername,dbusername,dbpassword,dbname)
    //  $conn = new mysqli("localhost", "root" ,"123456","phpone");




    //=>(iii) PDO (PHP Data Objects)

//new PDO("mysql:host=servername;dbname=dbname","dbusername",dbpassword);

// $conn = new PDO("mysql:host=localhost ;dbname=phpone","root","123456");
// $conn->setAttribute(PDO:ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// =>Method 1
// $dbhost = "localhost";
// $dbuser="root";
// $dbpass= "123456"
// $dbname =phpone ;



// $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
// $conn->setAttribute(PDO:ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//=>Method 2

                //(Set DSN = Data Source Name)
// $options = [PDO::ATTR_PERSISTENT=>true,PDO::ATTR_ERRMODE=>ERRMODE_EXCEPTION];

// $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass",$options);


// =>Exercise 
//=>(i)MySQLi Procedural (mysqli_close($conn))
$conn= mysqli_connect("localhost","root","123456","phpone");

// if($conn->connect_error){
//     echo "Connection Failed" . $conn->connect_error;
// exit();
// }else{
//     echo "Connected Sucessfully.";
// }

// if(mysqli_connect_error()){
//     echo "Connection Failed" . mysqli_connect_error();
//     die("Connection Failed".mysqli_connect_error());
// }else{
//     echo "Connected Sucessfully.";
// }

// if(!$conn){
//     echo "Connection Failed" . mysqli_connect_error();
//     // exit();
//     die("Connection Failed".mysqli_connect_error());
// }else{
//     echo "Connected Sucessfully.";
// }



 // (ii) MySQLi Object-Oriented $conn->close()

 $conn = new mysqli("localhost", "root" ,"123456","phpone");

//  if($conn->connect_error){
//     echo "Connection Failed" . $conn->connect_error;
// exit();
// die("Connection Failed".$conn->connect_error);
// }else{
//     echo "Connected Sucessfully.";
// }


if($conn->connect_errno){
    echo "Connection Failed" . $conn->connect_errno;
exit();
die("Connection Failed".$conn->connect_errno);
}else{
    echo "Connected Sucessfully.";
}




    //=>PDO (PHP Data Objects)

    $dbhost = "localhost";
    $dbuser="root";
    $dbpass= "123456";
    $dbname ="phpone";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connect Sucessfully";
}catch(PDOException $e){
    die("Connection Failed".$e->getMessage());
//    $this->error =$e->getMessage();
}

    

?>