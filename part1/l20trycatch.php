<?php

function mycolor($color){
    if($color !== "red"){
        // new Expection(message):
        throw new Exception("I hate $color color");
    }

    return "Yeah! my fav color is $color";

}

echo mycolor("red");



function mynum($base,$power){
    if($power >3){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

echo mynum(2,3);

//=>try.. catch statement

//try{
 //       code to be excuted
//}
// code to exception is catched
//}

function mycolor($color){
    if($color !=="red"){
        throw new Exception("I hate $color color");
    }

    return "Yeah!, ny fav color is $color";

}


try{
    echo mycolor("black");
}catch(Exception $e){
   echo "You should not try with this color.";
}

try{
    echo mycolor("black");
}catch(Exception $e){
   echo $e->getMessage();
}


try{
    echo mycolor("red");
}catch(Exception $e){
   echo $e->getMessage();
}




function mypower($base,$power){
    if($power >5){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

// echo mypower(2,6);


try{
   echo mypower(2,6);
}catch(Exception $e){
    echo "You should not over" . $e->getMessage();
}

try{
    echo mypower(2,3);
 }catch(Exception $e){
     echo "You should not over" . $e->getMessage();
 }


 //=>try .. catch  finally statement
//  try{
//      code to be excuted
//  }catch(){
//      code to exception is catched
//  }finally{
//         code that always run regardless of whether an exception was catch or not !
//  }


function mycalculator($base,$power){
    if($power >5){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}



try{
    echo mycalculator(2,6);
}catch(Exception $error){
    echo "You should not over" . $error->getMessage();
}finally{
    echo "Hey I am Joker";
}


try{
    echo mycalculator(2,3);
}catch(Exception $error){
    echo "You should not over" . $error->getMessage();
}finally{
    echo "Hey I am Joker";
}
?>