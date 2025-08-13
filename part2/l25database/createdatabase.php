
<?php

    ini_set('display_errors',1);


    // =>(i)MySQLi Procedural
    // $conn= mysqli_connect("localhost","root","123456","phpone");

//     if(mysqli_connect_error()){
//     echo "Connection Failed" . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected Sucessfully.";
// }

// $stmt = "CREATE  DATABASE IF NOT EXISTS phpdbone"; 
//    if(mysqli_query($conn,$stmt)){
//         echo "Database Create Sucessfully";
//    }else{
//     echo "Error Found";
//    }
//  mysqli_close($conn);


// 4/28/2025 

//       // =>(ii)MySQLi Procedural
//       $conn= new mysqli("localhost","root","123456");

//       if($conn->connect_errno){
//     //   echo "Connection Failed" . $conn->connect_errno;
//     //   exit();

//     die("Connection Failed :" . $conn->connect_errno);
//   }else{
//       echo "Connected Sucessfully.<br/>";
//   }
  
//   $stmt = "CREATE  DATABASE IF NOT EXISTS phpdbtwo"; 
//      if($conn->query($stmt)){
//           echo "Database Create Sucessfully";
//      }else{
//          echo "Error Found =" .$conn->error;
//      }
//      $conn->close();


      // =>(iii)PDO

    //   $dbhost= "localhost";
    //   $dbuser ="root";
    //   $dbpass ="123456";

    //  try{
    //     $conn= new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //     echo "Connect Successfully <br/>";

    //     $stmt = "CREATE DATABASE IF NOT EXISTS phpdbthree";
    //     $conn->exec($stmt);

  
    //  }catch(PDOException $e){
    //     echo "Error Found: ".$e->getMessage();
    //  }

    //  $conn = null;
    
?>
