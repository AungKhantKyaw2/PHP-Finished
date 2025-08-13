<?php
echo "I am php broswer redirection.";

// header("Location:https://www.google.com");
// exit;

$query =$_SERVER['QUERY_STRING'];


switch($query){
    case "google":
        header("Location:https://www.google.com");
        exit;
        break;
    case "linkedin":
            header("Location:https://www.linkedin.com");
            exit;
            break;
    case "youtube":
            header("Location:https://www.youtube.com");
            exit;
            break;
    default:
        echo "We do not have any redirection for your query!";
        break;        
}



?>