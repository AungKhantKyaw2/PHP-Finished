
<?php

$getdatas= file_get_contents('l29studentdb.json');
echo $getdatas;

$datade = json_decode($getdatas,true);//array
echo "<pre>" .print_r($datade,true). "</pre>";


//=>Read
foreach($datade as $datas){
//   echo "<pre>" .print_r($datas,true) ."</pre>";

    foreach($datas as $key=>$data){
        echo $key . " = " .$data . "<br/>";
    }

    echo "<hr/>";
}

//=>create

// $newdatas = [

//       [
//         "id" =>8,
//         "name"=>"lin lin",
//         "city"=>"Mandalay"
//       ],
//       [
//         "id" =>9,
//         "name"=>"lin lin",
//         "city"=>"Mandalay"
//       ],
//       [
//         "id" =>10,
//         "name"=>"lin lin",
//         "city"=>"Mandalay"
//       ]

//       ];

// foreach($newdatas as $newdata){
//      array_push($datade,$newdata);
//     file_put_contents('./l29studentdb.json',json_encode($datade));
// }

$idxs =[];


//select index to delete
foreach($datade as $key=>$datas){
     echo "<pre>" .print_r($datas,true) ."</pre>";
     if($datas['id']===10){
        $idxs[]=$key;//index number 9
        echo "<pre>" .print_r($idxs,true). "</pre>";
     }
}
//delet value from array
foreach($idxs as $idx){
    unset($datade[$idx]);
}

// do save
file_put_contents('./l29studentdb.json',json_encode($datade));

foreach($datade as $datas){
    //   echo "<pre>" .print_r($datas,true) ."</pre>";
    
        foreach($datas as $key=>$data){
            echo $key . " = " .$data . "<br/>";
        }
    
        echo "<hr/>";
    }
    

// =>Update 
// foreach($datade as $key=>$datas){
//     // echo "<pre>" .print_r($datas,true) ."</pre>";
//     // echo $key; //0 to 9
//     echo "<pre>" .print_r($datade[$key],true) ."</pre>";
//     echo $datas['id'];//1 to 10



//     if($datas["id"]===9)
// {
//      //id nunber 9 = index number 8
//      $datade[$key]["name"]="Chit Hsu Aung";
// }

// //do save
// file_put_contents('./l29studentdb.json',json_encode($datade));
// }


?>