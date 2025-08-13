
<?php
date_default_timezone_set('Asia/Yangon');
$getdate =getdate();
// "<pre>".print_r($getdate)."</pre>";

 $getyear=$getdate['year'];
echo $getyear;

$getwday =$getdate['wday']; 
echo $getwday; //0=sun 1=mon 2=tue 3=wed 4=thu 5=fri 6=sat

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP Class</title>
</head>
  <h1>Welcome to PHP Class</h1>
       
  <?php

     $time = time();
     $hours =date("H",$time,); //date("G",$time);
     echo $hours;
    if($hours<12){
        echo "Good Morning";
    }else if($hours< 18){
        echo "Good Afternoon";
    }else if($hours <22){
        echo "Good Evening";
    }else{
        echo "Good Night";
    }
  ?>
  <?php
     if($getwday==0){
        echo "Today is Sunday";
     }else if($getwday==1){
        echo "Today is Monday";
     }else if($getwday==2){
        echo "Today is Tuesday";
     }else if($getwday==3){
        echo "Today is Wednesday";
     }else if($getwday==4){
        echo "Today is Thursday";
     }else if($getwday==5){ 
        echo "Today is Friday";
     }else if($getwday==6){
        echo "Today is Saturday";
     }
  ?>

  <?php if($getwday===0): ?>
  <p>Today is Sunday</p>
  <?php elseif($getwday===1): ?>
  <p>Today is Monday</p>
  <?php elseif($getwday===2):?>
  <p>Today is Tuesday</p>
  <?php elseif($getwday===3): ?>
  <p>Today is Wednesday</p>
  <?php elseif($getwday===4): ?>
  <p>Today is Thursday</p>
  <?php elseif($getwday===5): ?>
  <p>Today is Friday</p>
  <?php else: ?>
  <p>Today is Saturday</p>
  <?php endif; ?>


  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
  </p>

  <footer>
    <small>Copyright <?php echo $getyear; ?>.All right reserved</small>
  </footer>
<body>
    
</body>
</html>