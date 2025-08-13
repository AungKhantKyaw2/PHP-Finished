<?php

ini_set('display_errors',1);

if(isset($_POST['submit'])){
    $uploaddir= "../part1/";
    $filenames= $_FILES['profile']['name'];
    $filetmps =$_FILES['profile']['tmp_name'];
    $fileerrs =$_FILES['profile']['error'];
    echo "<pre>".print_r($fileerrs,true)."</pre>";
    echo "<pre>".print_r($filenames,true)."</pre>";
    echo "<pre>".print_r($_FILES,true)."</pre>";


        foreach($fileerrs as $idx =>$fileerr){
            // echo $idx ."<br/>"; //0 to 2
            // echo $fileerr . "<br/>"; //

            //UPLOAD_ERR_OK ,means there no errors.

            if($fileerr === UPLOAD_ERR_OK){
                $getfilename =$filenames[$idx];
                $uploadfile= $uploaddir.basename($getfilename);
                $getfiletmp =$filetmps[$idx];


                if(move_uploaded_file($getfiletmp,$uploadfile)){
                    echo "Files Sucessfully Uploaded";
                }else{
                    echo "Upload Failed";
                }
              
        }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body>
        <div class="col-md-6 mx-auto mt-5">
           
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile[]" id="profile1" class="form-control" multiple/>
                    

                </div>
                <input type="submit" name="submit" class="btn btn-primary rounded-0 float-end" value="Upload"/>
            </form>
        </div>








    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>
