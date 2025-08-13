<?php


function redirect($page){
        $redirecturl= URLROOT.'/'.$page ;
        header("location:".$redirecturl);
}

// redirect("/auth/login")

?>