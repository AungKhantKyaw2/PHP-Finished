
<?php

// phpinfo();
ini_set('display_errors',1);

// if(isset($_POST['submit'])){
//     // echo "Hay";

//     // $result = $_POST['profile'];
//     // echo $result; //error

    $result =$_FILES;
    //echo result;
    var_dump($result);
  echo "<pre>".print_r($result,true) ."</pre>";


    echo $_FILES['profile']['name']. "<br/>";
    echo $_FILES['profile']['full_path']. "<br/>";
    echo $_FILES['profile']['type']. "<br/>";
    echo $_FILES['profile']['tmp_name']. "<br/>";
    echo $_FILES['profile']['error']. "<br/>";
    echo $_FILES['profile']['size']. "<br/>";

    // $fileext= explode('.',$_FILES['profile']['name']);
    // echo "<pre>".print_r($fileext,true) ."</pre>";
//     echo $fileext[0]. "<br/>";
//     echo $fileext[1]. "<br/>";
    
    // $filename =current(explode('.',$_FILES['profile']['name']));
    // echo $filename . "<br/>";

    // $fileextension = end(explode('.',$_FILES['profile']['name']));
    // echo $fileextension . "<br/>";

    //  $parts = explode('.', $_FILES['profile']['name']);
    // $filename = current($parts);
    // echo $filename . "<br/>";

//     $fileextension = end($parts);
//     echo $fileextension . "<br/>";

// }


// if(isset($_POST['submit'])){
//    $uploaddir= "./";
//    $uploadfile=$uploaddir.$_FILES['profile']['name']; // ./ser1.jpg
// //    $uploadfile=$uploaddir. basename($_FILES['profile']['name']);// ./ser1.jpg

//    //move_uplaod_file(temp,actual path and name)

//    if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//     echo "File Successfully Upload";

//    }else{
//     echo "Try Again";
//    }
// }

// if(isset($_POST['submit'])){

//     $uploaddir = "C:/xampp/htdocs/PHP/part1/";
//     $uploadfile =$uploaddir.basename($_FILES['profile']['name']);
//     $uploadsize = $_FILES['profile']['size'];
//     $uploadtype =strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));


//     echo $uploadsize;
//     echo $uploadtype;
//     //60000 bit =60 kb

//     if($uploadtype !== 'jpg' && $uploadtype!=='png' && $uploadtype !== 'gif'){
//         echo "Sorry , we just allowed for JPG,JPEG,PNG & GIF file types";
// }else{
//     //echo "Allowed file type";
//     if($uploadsize >60000){
//         echo "Sorry, Your file is too large";
//     }else{
//         echo "Allowed file size";
//            //move_uplaod_file(temp,actual path and name)

//    if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//     echo "File Successfully Upload";

//    }else{
//     echo "Try Again";
//    }
        
//     }
  
// }
// }




// if(isset($_POST['submit'])){
    

//          $uploaddir = "C:/xampp/htdocs/PHP/part1/";
//          $errors =[];
//         $ready =true;
//         $uploadfile =$uploaddir.basename($_FILES['profile']['name']);
//         $uploadsize = $_FILES['profile']['size'];
//         $uploadtype =strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
//        $allowextension=["jpg","jpeg","png","gif"];
     
    
    
//         // echo $uploadsize;
//         // echo $uploadtype;
//         //60000 bit =60 kb
    
//         //check file already exists or not 
//         if(file_exists($uploadfile)){
//             $errors[] ="Sorry , file already exists .<br/>";
//             $ready =false;
//         }
    
//         //check file size
//         if($uploadsize >60000){
//             $errors[]="Sorry, Your file is too large";
//             $ready =false;
//         }
    
//         //check file format
    
//         if(in_array($uploadtype,$allowextension)===false){
//             $errors[]="Sorry , we just allowed for JPG,JPEG,PNG & GIF file types .<br/>";
//             $ready =false;
//     }
    
    
//         //upload
    
//         if($ready){
//             // echo "Allowed file size";
//             //move_uplaod_file(temp,actual path and name)
    
//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//      echo "File Successfully Upload";
    
//     }else{
//      echo "Try Again";
//     }
//     }else{
//          echo "<pre>".print_r($errors,true) ."</pre>";
//         }
    
//     }
    

    
if (isset($_POST['submit'])) {
    $uploaddir = "C:/xampp/htdocs/PHP/part1/";
    $errors = [];
    $ready = true;

    echo UPLOAD_ERR_NO_FILE;//4
    echo UPLOAD_ERR_OK; //0
    echo var_dump(isset($_FILES['profile']));//1
    // Check if file was uploaded or has errors
    if (!isset($_FILES['profile']) || $_FILES['profile']['error'] !== UPLOAD_ERR_OK) {
        $error_code = $_FILES['profile']['error'] ?? UPLOAD_ERR_NO_FILE;
        if ($error_code === UPLOAD_ERR_NO_FILE) {
            $errors[] = "Please select a file to upload.";
        } else {
            $errors[] = "Upload error occurred. Code: " . $error_code;
        }
        $ready = false;
    } else {
        // Proceed if file was uploaded successfully
        $uploadfile = $uploaddir . basename($_FILES['profile']['name']);
        $uploadsize = $_FILES['profile']['size'];
        $uploadtype = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
        $allowextension = ["jpg", "jpeg", "png", "gif"];

        // Validate file existence
        if (file_exists($uploadfile)) {
            $errors[] = "Sorry, file already exists.";
            $ready = false;
        }

        // Validate file size
        if ($uploadsize > 60000) {
            $errors[] = "Sorry, your file is too large.";
            $ready = false;
        }

        // Validate file type
        if (!in_array($uploadtype, $allowextension)) {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $ready = false;
        }

        // Upload if all validations pass
        if ($ready) {
            if (move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)) {
                echo "File successfully uploaded.";
            } else {
                $errors[] = "Error uploading file. Please try again.";
                $ready = false;
            }
        }
    }

    // Display errors if any occurred
    if (!$ready) {
        echo "<pre>" . implode("\n", $errors) . "</pre>";
    }
}


     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body>
        <div class="col-md-6 mx-auto mt-5">
           
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="form-control"/>
                </div>
                <input type="submit" name="submit" class="btn btn-primary rounded-0 float-end" value="Upload"/>
            </form>
        </div>








    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>

<!-- 
bit byte
byte byte
kilo byte
mega byte
giga byte
tera byte
peta byte
exa byte
zetta byte
yotta byte

php.ini
upload_max_filesize=1024 M
upload_max_size =256Mb


1Mb =1024Kb instead of 1000Kb
01 base 2

2^0 =1
2^1 =2
2^2= 4
2^3 =8
2^4 =16
2 ^5 =32
2^6 =64
2^7 =128
2^8 =256
2^9 =512
2^10 =1024

Bytes to Kb
Kilobytes = Bytes /1024
2048 /1024 =2 kb

Kb to Mb
Megabytes = Kilobytes /1024
3072/1024 = 3Mb

Bytes to Mb
Kilobytes = Bytes /1024
Megabytes = Kilobytes /1024

Megabytes =Bytes /1024x1024
1,050,000 /1024x 1024 = 1Mb
-->