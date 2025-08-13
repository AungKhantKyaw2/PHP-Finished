
<?php

ini_set('display_errors',1);

function getfilesizemethod1($filesize){

    //Method 1
// return $filesize;

if(is_numeric($filesize)){

    $fixnum =1024;
    $idx =0;
    $prefix=["B","kB","MB","Gb","Tb","Pb","Eb","Zb","Yb"];

    while(($filesize/$fixnum)>0.9){
        $filesize = $filesize /$fixnum;
        $idx++;
    }

    return round($filesize,2) .' '.$prefix[$idx];
}
  else{
    return "NaN";
  }


}


 
 
 echo getfilesizemethod1(10240); // bit to 2kB

echo "<hr/>";


//Method2

function getfilesizemethod2($filesize){


    if(is_numeric($filesize)){

        $fixnum =1024;
        $idx =0;
        $prefix=["B","kB","MB","Gb","Tb","Pb","Eb","Zb","Yb"];
    
         if($filesize<$fixnum){
            return $filesize .' '.$prefix[$idx];
         }else{
    
            while(($filesize>$fixnum)){
                $filesize = round($filesize /$fixnum,2);
                $idx++;
            }
        
            return round($filesize,2) .' '.$prefix[$idx];
         }
    
        
    }
      else{
        return "NaN";
      }
    
}
echo getfilesizemethod2(10240); // bit to 2kB

echo "<hr/>";


function getfilesmethod3($filesize){
    $size =filesize($filesize);
    $fixnum =1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

    $power =$size >0 ? floor(log($size,$fixnum)) :0;
            //log(2513,1024) //1.452
            //floor(log(2513,1024)) //1

    $result =round($size /pow($fixnum,$power),0) .' '.$prefix[$power];
                // 2513 (1024/1)
                ///2513 1024 =1.45
    return $result;
}

echo getfilesmethod3('./l7array.php');
?>