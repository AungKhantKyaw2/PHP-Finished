
<?php

    ini_set('display_errors',1);


    // =>(i)MySQLi Procedural
//     $conn= mysqli_connect("localhost","root","123456","phpdbone");

//     if(mysqli_connect_error()){
//     echo "Connection Failed" . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected Sucessfully.";
// }

// $stmt = "CREATE TABLE IF NOT EXISTS students(
//         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         city VARCHAR(50),
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//         updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//         )"; 
//    if(mysqli_query($conn,$stmt)){
//         echo "Table Create Sucessfully";
//    }else{
//     echo "Error Found";
//    }

//    mysqli_close($conn);

// 4/28/2025 

//       // =>(ii)MySQLi Procedural
      $conn= new mysqli("localhost","root","123456","phpdbtwo");

      if($conn->connect_errno){
    //   echo "Connection Failed" . $conn->connect_errno;
    //   exit();

    die("Connection Failed :" . $conn->connect_errno);
  }else{
      echo "Connected Sucessfully.<br/>";
  }
    $stmt = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        city VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )"; 
     if($conn->query($stmt)){
          echo "Table Create Sucessfully";
     }else{
         echo "Error Found =" .$conn->error;
     }
     $conn->close();


      // =>(iii)PDO

      $dbhost= "localhost";
      $dbuser ="root";
      $dbpass ="123456";
      $dbname= "phpdbthree";

     try{
        $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connect Successfully <br/>";

       $stmt = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        city VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )"; 
        $conn->exec($stmt);
        echo "Table Create Sucessfully";
  
     }catch(PDOException $e){
        echo "Error Found: ".$e->getMessage();
     }

     $conn = null;
    
?>
