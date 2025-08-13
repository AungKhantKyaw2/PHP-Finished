
<?php
    $students =[
        [
         "firstname"=>"Aung Kyaw",
         "lastname"=>"Kyaw"
        ],
        [
             "firstname"=>"Tun Tun",
         "lastname"=>"Kyaw"
        ],
        [
               "firstname"=>"Kyaw Kyaw",
         "lastname"=>"Htway Lwin"
        ],
            
            [
                "firstname"=>"Hsu Hsu",
                "lastname"=>"Tun"
    
            ],
    
       [
             "firstname"=>"Tura Tun",
             "lastname"=>"Kyaw"
       ]
    ]
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with HTML</title>
</head>
<body>
    <h1>Data Land <?php echo "Student List:" ?></h1>
    <ul>
        <li> <?php echo $students[0]['firstname']. " ". $students[0]["lastname"] ?></li>
        <li> <?php echo $students[1]['firstname']. " ". $students[1]["lastname"] ?></li>
        <li> <?php echo $students[2]['firstname']. " ". $students[2]["lastname"] ?></li>
        <li> <?php echo $students[3]['firstname']. " ". $students[3]["lastname"] ?></li>
        <li> <?php echo $students[4]['firstname']. " ". $students[4]["lastname"] ?></li>
    </ul>
    

     <ul>
        <?php for($i=0; $i<count($students); $i++):?>
            <li> <?php echo $students[$i]['firstname']. " ". $students[$i]["lastname"] ?></li>
        <?php endfor ?>
     </ul>

     <ul>
        <?php foreach($students as $student): ?>
            <li> <?php echo $student['firstname']. " ". $student["lastname"] ?></li>
        <?php endforeach ?>

     </ul>

     
     <ul>
        <?php foreach($students as $student): ?>
            <li> <?php echo "{$student['firstname']} {$student["lastname"]}" ?></li>
        <?php endforeach ?>
        
     </ul>

         
     <ul>
        <?php foreach($students as $student): ?>
            <li> <?="{$student['firstname']} {$student["lastname"]}" ?></li> 
        <?php endforeach ?>
        
     </ul>
</body>
</html>