
<?php

ini_set('display_errors',1);


// =>PDO
   $dbhost="localhost";
   $dbuser ="root";
   $dbpass ="123456";
   $dbname ="phpone";
    
   //DB connect

   try{
        $conn= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->prepare("SELECT id,name,email FROM users");
        $stmt->execute();

        

        // while($row= $stmt->fetch()){
        //     echo "ID:" .$row['id']." name: ".$row['name']." Email :".$row['email'] ."<br/>";
        // }
  
     }catch(PDOException $e){
        echo "Error Found: ".$e->getMessage();
     }
     

     if(isset($_POST['submit'])){
        $qry = $conn->prepare("DELETE FROM users WHERE id=:id");
        $qry->bindParam(":id",$id);

        $id=$_POST['submit'];
        $qry->execute();

        echo $qry->rowCount(). "User Delete Successfully";
     
        $qry=null;
        $conn=null;

        // Redirct by PHP 
        // $currentpage =$_SERVER['PHP_SELF'];
        // header("Location:$currentpage");
        // exit();
        
        // Redirect by javascript
        echo "<script type=\"text/javascript\">
            //method 1
            // window.location.href =   window.location.href;

            //method2 
          window.location.replace(  window.location.href );

          //method 
            window.location.assign(  window.location.href );
        </script>";



     }
     $conn = null;

     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Delete Form</title>
</head>
<body>  
     <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">Delete Form</h3>
      
            <table class="table border table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                      <?php
                            while($row=$stmt->fetch()){
                                echo "<pre>".print_r($row,true)."</pre>";
                                $id =$row['id'];
                                $name=$row['name'];
                                $email=$row['email'];

                              echo  "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$name</td>";
                                echo "<td>$email</td>";
                                echo "<td><form action='' method='POST'><button type='submit' name='submit' id='submit' class='btn btn-danger btn-sm rounded-0' value='$id'>Delete</button></form></td>";  //$id sent to line 36
                         echo  "</tr>";
                                
                            }
                      ?>
                 
                </tbody>
            </table>
               
        </div>
     </div> 
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
