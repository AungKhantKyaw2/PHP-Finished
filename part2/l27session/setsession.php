
<?php

//=>Note :: Session store on Server (Super Global Variable)

session_start();

echo "<pre>".print_r($_SESSION,true) ."</pre>";

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] =1;
}
 
?>
