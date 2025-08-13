<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if($_SERVER['REQUEST_METHOD']==="POST"){
  
    $getemail=textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
 


    // echo $getemail;
    // echo $getpassword;
  
    if($getemail && $getpassword){
       loginverify($getemail,$getpassword);
      
    }else{
        echo "Enter Username & Password";
    }


}
function textfilter($data){
    $data =trim($data);
    $data = htmlspecialchars($data);
    $data=stripslashes($data);
    return $data;
}

function loginverify($email,$password){

    try{
        $conn = $GLOBALS['conn'];
        $stmt =$conn->prepare("SELECT email,password FROM users WHERE email=:email AND password=:password");
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);   
        
        $bindemail = $email;
        $bindpassword=$password;
        $stmt->execute();

        // echo $stmt->rowCount()."<br/>";

        
        
        // formatprint($stmt->fetch()); // result 1 from first row
        // formatprint($stmt->fetch(PDO::FETCH_ASSOC)); // result 1  from first row
        // formatprint($stmt->fetch(PDO::FETCH_OBJ));//result 1  from first row
        // formatprint($stmt->fetchAll());//all results
        // formatprint($stmt->fetchAll(PDO::FETCH_ASSOC));//all results
        // formatprint($stmt->fetchAll(PDO::FETCH_OBJ)); //all results
  

        if($stmt->rowCount()===0){
            echo "No Data";

            // redirectro('signin.php');
        }else{
            echo "Has Data";
            setsession('email',$bindemail);
            setsession('password',$bindpassword);

            redirectro('public/landingpage/index.php');
        }


    }catch(PDOException $e){
        echo "ErrorFound :" . $e->getMessage();
  }
}
//sudo chmod 777 -R public/
?>


<!-- CREATE TABLE IF NOt EXISTS users(
        id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        profile VARCHAR(255),
        firstname VARCHAR(20),
        lastname VARCHAR(20),
        email VARCHAR(30) UNIQUE,
        password VARCHAR(255),
        dob DATE,
        phone VARCHAR(13),
        address VARCHAR(100),
        documents VARCHAR(100)

); 
DESC users
-->