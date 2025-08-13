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

// $stmt = "UPDATE students SET lastname= 'zaw' WHERE id=2"; 
//    if(mysqli_query($conn,$stmt)){
//         echo "Updated Sucessfully";
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
  
//    $stmt = "UPDATE students SET lastname= 'moe' WHERE id=1";
//      if($conn->query($stmt)){
//           echo "Update Sucessfully";
//      }else{
//          echo "Error Found =" .$conn->error;
//      }
//      $conn->close();


      // =>(iii)PDO

      $dbhost= "localhost";
      $dbuser ="root";
      $dbpass ="123456";
      $dbname="phpdbthree";

     try{
        $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected  Successfully <br/>";

        $stmt = "UPDATE students SET city='Mandalay' WHERE id=10;";

        $conn->exec($stmt);
              echo "Updated Successfully <br/>";

  
     }catch(PDOException $e){
        echo "Error Found: ".$e->getMessage();
     }

     $conn = null;
    

   //  $dbhost= "localhost";
   //  $dbuser ="root";
   //  $dbpass ="123456";
   //  $dbname="phpdbthree";

   // try{
   //    $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
   //    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   //    echo "Data Connect Successfully <br/>";

      
   //    $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('yoon','yoon','yangon');");
   //    $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('thoon','thoon','yangon');");
   //    $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('mon','mon','yangon');");

   //    echo "Insert Successfully <br/>";

   // }catch(PDOException $e){
   //    echo "Error Found: ".$e->getMessage();
   // }

   // $conn = null;
?>


    
