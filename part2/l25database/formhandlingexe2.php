<?php

$name=$email=$password =$city =$favcolor =$bio = "";

// if($_SERVER["REQUEST_METHOD"]==="POST"){
//     $name = $_POST['name'];
//     $email=$_POST['email'];
//     $password=$_POST["password"];
//     $city =$_POST["city"];
//     $favcolor= $_POST["favcolor"];
//     $bio=$_POST["bio"];
// }


if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name =textfilter($_POST['name']);
    $email=textfilter($_POST['email']);
    $password=textfilter($_POST["password"]);
    $city =textfilter($_POST["city"]);
    $favcolor=textfilter($_POST["favcolor"]);
    $bio=textfilter($_POST["bio"]);
}
function textfilter($data){
    $data =trim($data);
    $data =htmlspecialchars($data);
    $data=stripslashes($data);
    return $data;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Exercise 2 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control"/>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control"/>
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control"/>
            </div>

            <div class="mb-3">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control"/>
            </div>

            <div class="mb-3">
            <label >favcolor</label>
                <input type="radio" name="favcolor" id="favrd" class="form-check-input"/><label for="favrd">Red</label>
                <input type="radio" name="favcolor" id="favgn" class="form-check-input"/><label for="favgn">Green</label>
                <input type="radio" name="favcolor" id="favbl" class="form-check-input"/><label for="favbl">Blue</label>
            </div>

            <div class="mb-3">
                <label for="bio">Bio</label>
                <textarea name="bio" id="bio" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary rounded-0">Submit</button>
        </form>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>  
</body>
</html>

<?php 

echo "<h2>My Information Are ...</h2>";
echo "Name is $name <br/>";
echo "Email is $email <br/>";
echo "Password is $password <br/>";
echo "City is $city <br/>";

echo $_SERVER["PHP_SELF"];


?>