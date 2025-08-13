<?php
function textfilter($value){
    $data =trim($value);
    $data = htmlspecialchars($data);
    $data  =stripslashes($data);

    return $data;

}

?>