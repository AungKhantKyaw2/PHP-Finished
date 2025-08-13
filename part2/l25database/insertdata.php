<?php
// 4/28/2025

ini_set("display_errors",1);

    // =>(i)MySQLi Procedural
//     $conn= mysqli_connect("localhost","root","123456","phpdbone");

//     if(mysqli_connect_error()){
//     echo "Connection Failed" . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected Sucessfully.";
// }

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon')"; 
//    if(mysqli_query($conn,$stmt)){
//         echo "Database Insert Sucessfully";
//    }else{
//     echo "Error Found";
//    }
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
  
//   $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon')";
//      if($conn->query($stmt)){
//           echo "Data INSERT Sucessfully";
//      }else{
//          echo "Error Found =" .$conn->error;
//      }
//      $conn->close();


      // =>(iii)PDO

    //   $dbhost= "localhost";
    //   $dbuser ="root";
    //   $dbpass ="123456";
    //   $dbname="phpdbthree";

    //  try{
    //     $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //     echo "Connected  Successfully <br/>";

    //     $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon');";
    //     $stmt .= "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon');";
    //     $stmt .= "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon');";
    //     $conn->exec($stmt);
            //   echo "Inserted  Successfully <br/>";

  
    //  }catch(PDOException $e){
    //     echo "Error Found: ".$e->getMessage();
    //  }

    //  $conn = null;
    

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


    
