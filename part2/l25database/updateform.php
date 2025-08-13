
<?php

ini_set('display_errors',1);

// if(isset($_POST['submit'])){
//             echo "Form submitted";


// }

//=>MySQLi Object-Oriented

//DB connect

$conn= new mysqli("localhost","root","123456","phpone");
    if($conn->connect_errno){
        die("Failed to connect mysqli" . $conn->connect_errno);
    }else{
        echo "Connect Sucessfully <br/>";
        $sql = "SELECT id ,name,email,password FROM users";
        $results = $conn->query($sql);

        echo "$results->num_rows";
    }


if(isset($_POST['submit'])){

    $stmt =$conn->prepare("UPDATE users SET name=?,email=?,password=? WHERE id=?;");
    $stmt->bind_param('sssi',$name,$email,$password,$id);
    
    $id= $_POST['userid'];
    $name =textfilter($_POST['name']);
    $email =textfilter($_POST['email']);
    $password =textfilter($_POST['password']);

    $stmt->execute();
    // echo($getname);
    // echo($getemail);
    // echo($getpassword);

        //Data Insert
    // 1.db connect
    // 2.query
    // 3.prepare(encrypt)
    // 4.bind_param(decrypt)
    // 5.excute
    // 6.close

    
    echo "Update User Successfully";
    $stmt->close();
    $conn->close();

    
}
   

    function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data= stripslashes($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Register Form</title>
</head>
<body>  
     <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">Update Form</h3>
         <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" autocomplete="off">    <!-- => No need to do individual -->
                
                <div class="mb-3">
                    <label for="userid">USER ID</label>
                    <select name="userid" id="userid" class="form-control">
                        <!-- <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option> -->

                        <?php
                            if($results->num_rows>0){
                                while($row =$results->fetch_assoc()){
                                    $id = $row['id'];
                                    echo "<option value='$id'>$id</option>";
                                
                                }
                            
                            }else{
                                echo "<option value=''>No Data</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" required />
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required />
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required />
                </div>

                <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Update"/>
            </form>
        </div>
     </div> 
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
