
<?php

function setpassword($plaintext){
    $passcode=$plaintext;
    echo $passcode;
}

setpassword("password1234");



function setpasscode($plaintext){
    $passcode=password_hash($plaintext,PASSWORD_DEFAULT);//dyn code
    
    echo "Before Encrypted ={$plaintext},After Encrypt={$passcode}";
    echo strlen($passcode);//60
}
setpasscode("password1234");//Before Encrypted =password1234,After Encrypt=$2y$10$grktIWRGrXBW.5QLUO6/AOKtXJM66HsLyrtnJyd0k59yAkp87ODtm 60


function passwordbcr($plaintext){
    $passcode=password_hash($plaintext,PASSWORD_BCRYPT);//dyn code
    
    echo "Before Encrypted ={$plaintext},After Encrypt={$passcode}";
    echo strlen($passcode);//60
}

passwordbcr("password1234");//Before Encrypted =password1234,After Encrypt=$2y$10$grktIWRGrXBW.5QLUO6/AOKtXJM66HsLyrtnJyd0k59yAkp87ODtm 60  


function passworddecry(){
    $plaintextone="password123";
    $encodeone= password_hash($plaintextone,PASSWORD_DEFAULT);//dyn

    $plaintexttwo="password1234";
    $encodetwo=password_hash($plaintexttwo,PASSWORD_BCRYPT);//dyn

    //echo "Encrypt Code one ={$encodeone}";
    //echo "Encrypt Code two ={$encodetwo}";
    
    $verify =password_verify($plaintextone,$encodeone); //true
    if($verify){
        echo "OKi";
    }
     else{
        echo "Failed";
     }
   
}

passworddecry();


function passwordmd5($plaintext){
    //Message-Digest = md5(string,binary)
    //Note::binary =TRUE/true  FALSE/false
    //TRUE/true = RAW 16 characters binary format
    //FALSE/false =DEFAULT 32 characters hexadecimal format

    $passcode1= md5($plaintext);// static
    echo "Before Encrypt md5={$plaintext},After Encrypt md5={$passcode1}";//Before Encrypt md5=password1234,After Encrypt md5=bdc87b9c894da5168059e00ebffb9077 32
    echo strlen($passcode1);//32

    $passcode2= md5($plaintext,FALSE);// static
    echo "Before Encrypt md5={$plaintext},After Encrypt md5={$passcode2}";//Before Encrypt md5=password1234,After Encrypt md5=bdc87b9c894da5168059e00ebffb9077 32
    echo strlen($passcode2);//32


    
    $passcode3= md5($plaintext,TRUE);// static
    echo "Before Encrypt md5={$plaintext},After Encrypt md5={$passcode3}";//Before Encrypt md5=password1234,After Encrypt md5=��{��M��Y����w 16
    echo strlen($passcode3);//16




}

passwordmd5("password1234");


function passwordmd5verify($plaintext){

    $getpassword = "bdc87b9c894da5168059e00ebffb9077";

    if($getpassword===md5($plaintext)){
        echo "Password match with 32 chars hax number";
    }elseif($getpassword===md5($plaintext,TRUE)){
        echo "Password match with 166 char binary format"; // cuz it is binary
    } else{
        echo "Password not match";
    }
}

passwordmd5verify("password1234");//Password match with 32 chars hax number




function passwordsh1($plaintext){
    //Message-Digest = sha1(string,binary)
    //Note::binary =TRUE/true  FALSE/false
    //TRUE/true = RAW 20 characters binary format
    //FALSE/false =DEFAULT 40 characters hexadecimal format

    $passcode1= sha1($plaintext);// static
    echo "Before Encrypt md5={$plaintext},After Encrypt md5={$passcode1}";//Before Encrypt md5=password1234,After Encrypt md5=e6b6afbd6d76bb5d2041542d7d2e3fac5bb05593 40
    echo strlen($passcode1);//40

    $passcode2= sha1($plaintext,FALSE);// static
    echo "Before Encrypt md5={$plaintext},After Encrypt md5={$passcode2}";//Before Encrypt md5=password1234,After Encrypt md5=e6b6afbd6d76bb5d2041542d7d2e3fac5bb05593 40 
    echo strlen($passcode2);//40


    
    $passcode3=sha1($plaintext,TRUE);// static
    echo "Before Encrypt md5={$plaintext},After Encrypt md5={$passcode3}";//Before Encrypt md5=password1234,After Encrypt md5=涯�mv�] AT-}.?�[�U� 20
    echo strlen($passcode3);//20




}
passwordsh1("password1234");





function passwordsha1verify($plaintext){

    $getpassword = "e6b6afbd6d76bb5d2041542d7d2e3fac5bb05593";

    if($getpassword===sha1($plaintext)){
        echo "Password match with 40 chars hax number";
    }elseif($getpassword===sha1($plaintext,TRUE)){
        echo "Password match with 20 char binary format"; // cuz it is binary
    } else{
        echo "Password not match";
    }
}

passwordsha1verify("password1234");//Password match with 32 chars hax number



function passwordcrypt($plaintext){

    $crytkey = "456789ABCDEFG";
    $passcode =crypt($plaintext,$crytkey);// static code
    echo "Before Encrypt ={$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);//13


}
passwordcrypt("password1234");//Before Encrypt =password1234 , After Encrypt = 45X0h1uT9HvTw 13


function passwordcryptverify($plaintext){

    $getpassword = "45X0h1uT9HvTw4";
    $crytkey = "456789ABCDEFG";

    if($getpassword===crypt($plaintext,$crytkey)){
        echo "Password match ";
    } else{
        echo "Password not match";
    }
}

passwordcryptverify("password1234");//Password match with 32 chars hax number


function strongpassword($plaintext){

    $crytkey="456789ABCDEFG";
    $newpassword=crypt(sha1(md5($plaintext)),$crytkey);//Before Encrypt =password123 , After Encrypt = 45QUhSRh116Mw 13

    echo "Before Encrypt ={$plaintext} , After Encrypt = {$newpassword}";
    echo strlen($newpassword);//13
    // $newpassword = md5($plaintext);//32
    // $newpassword = sha1($newpassword); //40 
    // $newpassword= crypt($newpassword,$newpassword); //static ////Before Encrypt =password123 , After Encrypt = 926wQBSqLwkTE 13
    
    

}

strongpassword("password123");


function strongpasswordverify($plaintext){
    
    $getpassword="45QUhSRh116Mw";
    $crytkey="456789ABCDEFG";
    if($getpassword===crypt(sha1(md5($plaintext)),$crytkey)){
        echo "Password match with 13 chars hax number";
    } else{
        echo "Password not match";
    }
    // $getpassword="926wQBSqLwkTE";

    // if($getpassword ===crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
    //     echo "Password match with 13 chars hax number";
    // } else{
    //     echo "Password not match";
    // }

}


strongpasswordverify("password123");//Password match with 13 chars hax number

?>