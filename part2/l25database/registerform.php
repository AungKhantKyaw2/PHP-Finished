
<?php

ini_set('display_errors',1);

// if(isset($_POST['submit'])){
//             echo "Form submitted";


// }

if(isset($_POST['submit'])){
    $conn= mysqli_connect("localhost","root","123456","phpone");
    if($conn->connect_error){
        echo "Failed to connect mysqli" . $conn->connect_error;
    }else{
        echo "Connect Sucessfully <br/>";



  
    }


    $getname =textfilter($_POST['name']);
    $getemail =textfilter($_POST['email']);
    $getpassword =textfilter($_POST['password']);
    echo($getname);
    echo($getemail);
    echo($getpassword);

    
    //Data Insert
    // 1.db connect
    // 2.query
    // 3.prepare(encrypt)
    // 4.bind_param(decrypt)
    // 5.excute
    // 6.close
    $stmt = "INSERT INTO users(name,email,password) VALUE(?,?,?)";
    $insertstmt = mysqli_prepare($conn,$stmt); // To insert data to database
    mysqli_stmt_bind_param($insertstmt,'sss',$getname,$getemail,$getpassword);// to put data the ? securityy   VALUE(?,?,?)  first s =$getname ,second s =$getemail ,third s=$getpassword
    mysqli_stmt_execute($insertstmt);
    
    echo "New User Create Successfully";
    mysqli_close($conn);
}
//=>MySQLi Procedural


//DB connect


   

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
            <h3 class="text-center my-3">Register Form</h3>
         <form action="" method="POST" autocomplete="off">    <!-- => No need to do individual -->
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

                <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign up"/>
            </form>
        </div>
     </div> 
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

<!-- CREATE  TABLE IF NOT EXISTS users(
      id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
      name VARCHAR(20),
      email VARCHAR(20),
      password VARCHAR(225)
    );-->