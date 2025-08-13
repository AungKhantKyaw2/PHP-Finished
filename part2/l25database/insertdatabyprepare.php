<?php
// 4/28/2025

ini_set("display_errors",1);


//The arguments(4 types)
// s =string
// i =integer
// d= double
// b = blob


    // =>(i)MySQLi Procedural
//     $conn= mysqli_connect("localhost","root","123456","phpdbone");

//     if(mysqli_connect_error()){
//     echo "Connection Failed" . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected Sucessfully.";
// }

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE(?,?,?)";
// $insertstmt = mysqli_prepare($conn,$stmt);
// mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

// $firstname = "maung";
// $lastname ="zaw";
// $city = "bagan";
// mysqli_stmt_execute($insertstmt);


// echo "INsert Successfully";
//  mysqli_close($conn);


//  $conn= mysqli_connect("localhost","root","123456","phpdbone");

//  if(mysqli_connect_error()){
//  echo "Connection Failed" . mysqli_connect_error();
//  exit();
// }else{
//  echo "Connected Sucessfully.";
// }


// $firstname = "su";
// $lastname ="su";
// $city = "bago";
// mysqli_stmt_execute($insertstmt);

// $firstname = "zaw";
// $lastname ="zaw";
// $city = "yagon";
// mysqli_stmt_execute($insertstmt);

// $firstname = "hnin";
// $lastname ="hnin";
// $city = "mawlamyine";
// mysqli_stmt_execute($insertstmt);

// echo "INsert Successfully";
// mysqli_stmt_close($insertstmt);
//  mysqli_close($conn);


// 4/28/2025 

//       // =>(ii)MySQLi Procedural
//       $conn= new mysqli("localhost","root","123456","phpdbtwo");

//       if($conn->connect_errno){
//     //   echo "Connection Failed" . $conn->connect_errno;
//     //   exit();

//     die("Connection Failed :" . $conn->connect_errno);
//   }else{
//       echo "Connected Sucessfully.<br/>";
//   }


//Method 1
//    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE(?,?,?);");
//     $stmt->bind_param('sss',$firstname,$lastname,$city);

// MEthod 2   
//   $stmt = "INSERT INTO students(firstname,lastname,city) VALUE(?,?,?)";
//   $insertstmt = $conn->prepare($stmt);
//   $insertstmt->bind_param('sss',$firstname,$lastname,$city);


 


//   $firstname = "su su";
// $lastname ="su";
// $city = "bago";
// $insertstmt->execute();

// $firstname = "zaw zaw";
// $lastname ="zaw";
// $city = "yagon";
// $insertstmt->execute();

// $firstname = "hnin hnin";
// $lastname ="hnin";
// $city = "mawlamyine";
// $insertstmt->execute();

// echo "Insert sucessfully";


// $insertstmt->close();
// $conn->close();







      // =>(iii)PDO
      //exec() use withoout prepare()
      //excute() use with prepare()

      $dbhost= "localhost";
      $dbuser ="root";
      $dbpass ="123456";
      $dbname="phpdbthree";

     try{
        $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected  Successfully <br/>";

        $stmt =$conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE(:firstname,:lastname,:city);");
        $stmt->bindParam(":firstname",$firstname);
        $stmt->bindParam(":lastname",$lastname);
        $stmt->bindParam(":city",$city);
     
     
        $firstname = "su su";
        $lastname ="su";
        $city = "bago";
        $stmt->execute();
        
        $firstname = "zaw zaw";
        $lastname ="zaw";
        $city = "yagon";
        $stmt->execute();
        
        $firstname = "hnin hnin";
        $lastname ="hnin";
        $city = "mawlamyine";
        $stmt->execute();
        
              echo "Inserted  Successfully <br/>";

  
     }catch(PDOException $e){
        echo "Error Found: ".$e->getMessage();
     }

   
     $conn = null;
    

//     $dbhost= "localhost";
//     $dbuser ="root";
//     $dbpass ="123456";
//     $dbname="phpdbthree";

//    try{
//       $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//       echo "Data Connect Successfully <br/>";

      
//       $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('yoon','yoon','yangon');");
//       $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('thoon','thoon','yangon');");
//       $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('mon','mon','yangon');");

//       echo "Insert Successfully <br/>";

//    }catch(PDOException $e){
//       echo "Error Found: ".$e->getMessage();
//    }

//    $conn = null;
?>


    
