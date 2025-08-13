<?php

//=>Auth Check(check user login or not)    
session_start();
function authcheck(){
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}
//=>Auth Check by dyn key
function authdyncheck($key="user_id"){
    return isset($_SESSION[$key]);
}
//=>logout
function logout(){
    session_unset();
    session_destroy();
}


?>