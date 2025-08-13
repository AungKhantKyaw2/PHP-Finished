<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if($_SERVER['REQUEST_METHOD']==="POST"){
    $getfirstname =textfilter($_POST['firstname']);
    $getlastname =textfilter($_POST['lastname']);
    $getemail=textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress =textfilter($_POST['address']);
    // $getdocuments = textfilter($_POST['documents']);
    $getnewsletter =textfilter($_POST['newsletter']);

    echo $getfirstname;
    echo $getlastname;
    echo $getemail;
    echo $getpassword;
    echo $getdob;
    echo $getphone;
    echo $getaddress;
    // echo $getdocuments;
    echo $getnewsletter;


}
function textfilter($data){
    $data =trim($data);
    $data = htmlspecialchars($data);
    $data=stripslashes($data);
    return $data;
}

if($getemail && $getpassword){

        try{
            
            $stmt = $conn->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,documents,newsletter) VALUE (:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:documents,:newsletter)");

            $stmt->bindParam(":profile",$bindprofile);
            $stmt->bindParam(":firstname",$bindfirstname);
            $stmt->bindParam(":lastname",$bindlastname);
            $stmt->bindParam(":email",$bindemail);
            $stmt->bindParam(":password",$bindpassword);
            $stmt->bindParam(":dob",$binddob);
            $stmt->bindParam(":phone",$bindphone);
            $stmt->bindParam(":address",$bindaddress);
            $stmt->bindParam(":documents",$binddocuments);
            $stmt->bindParam(":newsletter",$bindnewsletter);


            //handle profile 
            $countfiles = count($_FILES['profile']['name']);
            if($countfiles){
                for($x=0; $x< $countfiles; $x++){   

                    $getuniqid = uniqid().'_'.time();
                    $uploaddir = "public/assets";   
                    $ready =true;
                    // $uploadfile =$uploaddir.basename($_FILES['profile']['name'][$x]);
                    // $uploadfile =$uploaddir.$getuniqid.basename($_FILES['profile']['name'][$x]);

                    $getextension =pathinfo($_FILES['profile']['name'][$x],PATHINFO_EXTENSION);
                    $newfilename =$getuniqid.".".basename($getextension);
                    $uploadfile =$uploaddir.basename($newfilename);

                    $uploadsize = $_FILES['profile']['size'][$x];
                    $uploadtype =strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
                    $allowextension=["jpg","jpeg","png","gif"];
                    $errors =[];
                
           
                       //check file size
                       if($uploadsize >60000){
                           $errors[]="Sorry, Your file is too large";
                     
                       }
                   
                       //check file format or extension
                   
                       if(in_array($uploadtype,$allowextension)===false){
                           $errors[]="Sorry , we just allowed for JPG,JPEG,PNG & GIF file types .<br/>";
                          
                   }
                   
                   
                       //upload
                   
                       if(empty($errors)===true){
                           // echo "Allowed file size";
                           //move_uplaod_file(temp,actual path and name)
                   
                   if(move_uploaded_file($_FILES['profile']['tmp_name'][$x],$uploadfile)){
                             $bindprofile = $uploadfile;
                    echo "File Successfully Upload";
                   
                   }else{
                    echo "Try Again";
                   }
                   }else{
                        echo "<pre>".print_r($errors,true) ."</pre>";
                       }
                   
                   }
                   
             
                }
            

         
            $bindfirstname=$getfirstname;
            $bindlastname=$getlastname;
            $bindemail=$getemail;
            $bindpassword=$getpassword;
            $binddob=$getdob;
            $bindphone=$getphone;
            $bindaddress=$getaddress;
            $bindnewsletter=$getnewsletter;
            
            $getdocuments= NULL;

            if(isset($_POST['documents'])){
                $docs =$_POST['documents'];
                foreach($docs as $doc){
                    $getdocuments .= $doc .",";
                }
            }

            $binddocuments =$getdocuments;
            


            if($stmt->execute()){
                // session store
             
                setsession('email',$bindemail);
                setsession('password',$bindpassword);
                   //redirect to profile or webpage
                //    redirectro('https://google.com');
                   redirectro('public/landingpage/index.php');
            }else{
                echo "Try Again";
            };


        }catch(PDOException $e){
            echo "ErrorFound :" . $e->getMessage();
      }

      $conn= null;
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
        documents VARCHAR(100),
        newsletter TINYINT / BOOLEAN

); 
DESC users
-->