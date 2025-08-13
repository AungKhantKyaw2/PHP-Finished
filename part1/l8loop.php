<?php
//=>PHP looping

//for 

//foreach
//while
//do..while


$colorsones=["red","green","blue","white","black","gray","pink"];//indexed array
echo count($colorsones);
var_dump($colorsones);


$colorsoneskey= array_keys($colorsones);
echo $colorsoneskey; //error
var_dump($colorsoneskey);


for($i=0; $i<count($colorsones); $i++){
     echo $i;//0 to 6

    //  echo "This is indexed array or manuaal array by for loop index key is" .$i. " and value is =" .$colorsones[$i];
     echo "This is indexed array or manuaal array by for loop index key is" .$colorsoneskey[$i]. " and value is =" .$colorsones[$i];
    }
    

    foreach($colorsones as $colorsone){
        echo "This is index array or manual array by for each = $colorsone";
    }

    foreach($colorsones as $idx=> $colorsone){
        // echo $key;
        echo "This is index array or manual array by for each = index key is ".$idx. " and value is =". $colorsone;
    }

    $x=0;
    while($x<count($colorsones)){
        // echo $colorsones[$x];
        // $x++;

        // echo "This is index array or manual array by for each = index key is ".$x. " and value is =". $colorsones[$x];
        echo "This is index array or manual array by for each = index key is ".$colorsoneskey[$x]. " and value is =". $colorsones[$x];
        $x++;
    }
$y=0;
    do{
        echo "This is index array or manual array by for each = index key is ".$colorsoneskey[$y]. " and value is =". $colorsones[$y];    
        $y++;
    }while($y<count($colorsones));
?>