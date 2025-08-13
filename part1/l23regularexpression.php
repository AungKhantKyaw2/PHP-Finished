<?php

$string = "We are family";
echo $string;

// preg_match(patttern,string);

// $result =preg_match("We are family",$string);//error

$result = preg_match("/We are family/",$string);//true
$result = preg_match("/family/",$string);//true
$result = preg_match("/Family/",$string);//false
$result = preg_match("/mily/",$string);//true


$result = preg_match("/mily$/",$string);//true
$result = preg_match("/family$/",$string);//true
$result = preg_match("/Family$/",$string);//false
$result = preg_match("/are$/",$string);//false
$result = preg_match("/We$/",$string);//false


$result = preg_match("/^mily/",$string);//false 
$result = preg_match("%^are%",$string);//false
$result = preg_match("#^we#",$string);//false
$result = preg_match("!^We!",$string);//true


$result = preg_match("/^family$/",$string);//false  Note:: string must be exact "family"
$result = preg_match("/^$/",$string);//false  Note:: string must be empty


$result = preg_match("/^we/",$string);//false
$result = preg_match("/^we/i",$string);//true
$result = preg_match("/^We/i",$string);//true


$result = preg_match("/[b-d]/",$string);//false
$result = preg_match("/[a-f]/",$string);//true
$result = preg_match("/[a-z]/",$string);//true
$result = preg_match("/[A-Z]/",$string);//true
$result = preg_match("/[0-4]/",$string);//false

$string = "my lucky number is 567";

$result = preg_match("/[0-4]/",$string);//true
$result = preg_match("/[5-9]/",$string);//true
$result = preg_match("/[a-z]/",$string);//true
$result = preg_match("/[A-Z]/",$string);//false
$result = preg_match("/[A-Z]|[a-z]/",$string);//true
$result = preg_match("/[A-Z ,a-z]/",$string);//true
$result = preg_match("/^[a-z]/",$string);//true
$result = preg_match("/[a-z]$/",$string);//false
$result = preg_match("/^[5-9]/",$string);//false
$result = preg_match("/[5-9]$/",$string);//true


$result = preg_match("/[^a-z]/",$string);//true Note: it's means that not included a to z !, result is trrue cuz $string included spacing and digits
$result = preg_match("/[^5-9]/",$string);//true Note: it's means that not included 5 to 9 !, result is trrue cuz $string included spacing and digits
$result = preg_match("/[^0-4]/",$string);//true Note: it's means that not included 0 to 4 !, result is trrue cuz $string included spacing and digits


$result = preg_match("/@/",$string); //false

$string = "admin@gmail.com";

$result = preg_match("/@/",$string); //true
$result = preg_match("/m/",$string); //true
$result = preg_match("/m+/",$string); //true
$result = preg_match("/b+/",$string);// false
$result = preg_match("/b+/",$string);// false
$result = preg_match("/b+/",$string);// false
$result = preg_match("/b*/",$string);// true
$result = preg_match("/b?/",$string);// true

$result = preg_match("/m{1}/",$string);//true
$result = preg_match("/m{2}/",$string);//false


$string = "adminn@gmail.com";
$result = preg_match("/n{1}/",$string);//false
$result = preg_match("/n{2}/",$string);//true
$result = preg_match("/n{3}/",$string);//false
$result = preg_match("/n{2,3}/",$string);//true
$result = preg_match("/n{2,}/",$string);//true
$result = preg_match("/\s/",$string);//false


$string = "V8 Engine";
$result = preg_match("/\s/",$string);//true
$result = preg_match("/\d/",$string);//true
$result = preg_match("/\D/",$string);//true
$result = preg_match("/\w/",$string);//true
$result = preg_match("/\W/",$string);//true

$string = "528";
$result = preg_match("/\d/",$string);//true
$result = preg_match("/\D/",$string);//false
$result = preg_match("/\w/",$string);//true
$result = preg_match("/\W/",$string);//false


$string = "admin@gmail.com";
$result = preg_match("/a\wm/",$string);//true
$result = preg_match("/a\w{1}m/",$string);//true
$result = preg_match("/a\w{2}m/",$string);//false    //adbmingmail.com
$result = preg_match("/a\w{2,4}m/",$string);//false  //adbcdmingmail.com
$result = preg_match("/a\w{2,}m/",$string);//false   //adbcefdmingmail.com



$result = preg_match("/a.m/",$string);//true 
$string ="adbmaingmail.com";
$result = preg_match("/a..m/",$string);//true  //adbmaingmail.com
$result = preg_match("/a.{1}m/",$string);//true  
$result = preg_match("/a.{2}m/",$string);//false , cuzany exact 2  words //adbcmain@gmail.com
$result = preg_match("/a.{2,4}m/",$string);//false,cuzany exact 2  words //adbcemain@gmail.com
$result = preg_match("/a.{2,}m/",$string);//false  ,cuzany exact 2  or more  words //acmain@gmail.com


$string ="PHP";
$result = preg_match("/.{2}/",$string);//true  //PHP

$string="php";
$result = preg_match("/hp*/",$string);//true  //php
$result = preg_match("/p(hp)*/",$string);//true
$result = preg_match("/p(hp)+/",$string);//true   , false condition = p, pbp pcc p hp

$string ="Vv";
$result = preg_match("/.{2}/",$string);//true  //Vv
$result = preg_match("/^.{2}$/",$string);//true  //exact any 2 characters

$string = "Welcome to our <i>Programming class</i>";
$result = preg_match("/<i><\/i>/",$string);//false
$result = preg_match("/<i>\w<\/i>/",$string);//false  ,cuz one chars
$result = preg_match("/<i>\w*<\/i>/",$string);//false  ,cuz contained space
$result = preg_match("/<i>\w<\/i>/",$string);//false   , cuz contained space
$result = preg_match("/<i>.<\/i>/",$string);//false
$result = preg_match("/<i>.*<\/i>/",$string);//true
$result = preg_match("/<i>(.*)<\/i>/",$string);//true


$string ="aungkhantkyaw.didi@gmail.com";
$result=preg_match("/^[a-z,A-z]+\.[a-z]+@[a-z]+\.\w{3}/",$string);//false
echo $result;

 // preg_replace(patttern,replacement,string);
   $string="Are you ready to learn PHP Framework.";
   $result =preg_replace("/php/",'javascript',$string);//Are you ready to learn PHP Framework
   $result =preg_replace("/php/i",'javascript',$string);//Are you ready to learn javascript Framework
   $result =preg_replace("/\s/",'',$string);//AreyoureadytolearnPHPFramework.


     //Bracket Expression
     $string ="adming123@gmail .com";

     $result =preg_replace("/[[:space:]]/","",$string);//adming123@gmail.com
     $result =preg_replace("/[[:space:]]/","x",$string);//adming123@gmailx.com
     $result =preg_replace("/[[:alpha:]]/","x",$string);//xxxxxx123@xxxxx .xxx
     $result=preg_replace("/[[:digit:]]/","x",$string);//admingxxx@gmail .com
    $result=preg_replace("/[[:alnum:]]/","x",$string);//xxxxxxxxx@xxxxx .xxx
    $result=preg_replace("/[[:punct:]]/","x",$string);//adming123xgmail xcom

    $string = "Admin123@gmail.com";
    $result = preg_replace("/[[:lower:]]/","x",$string);//Axxxx123@xxxxx.xxx
    $result = preg_replace("/[[:upper:]]/","x",$string);//xdmin123@gmail.com


   $string ="Are you ready to leaarn PHP Framework.";
   $result =preg_replace(["/PHP/","/framework/"],["javascript","libraries"],$string);//Are you ready to learn javascript framework.   
   $result =preg_replace(["/PHP/","/framework/i"],["javascript","libraries"],$string);//Are you ready to learn javascript libraries.   


   $string = "My lucky number is 007 but i got ticket number 5700";
   $result =preg_replace("/[0-9]/","x",$string);//My lucky number is xxx but i got ticket number xxxx
   $result =preg_replace("/[0-9]+/","x","$string");//My lucky number is x but i got ticket number x

echo $result;

                                  // no limit = 0 (or) NULL
        //preg_split(pattern,string,limit,flags);

$string ="My lucky number is 007";
$result = preg_split("/\s/",$string);//["My","lucky","number","is","007"])

// echo $result;// error Array to string conversion
echo "<pre>".print_r($result,true)."</pre>";//=>Array ( [0] => My [1] => lucky [2] => number [3] => is [4] => 007 )
echo $result[0];//=>My
echo $result[4];//=>007


$result = preg_split("/\s/",$string,2); //["My","lucky number is 007"])
echo "<pre>".print_r($result,true)."</pre>";//=>Array ( [0] => My [1] => lucky number is 007 )
echo $result[0];//=>My
echo $result[1];//=>lucky number is 007

$string ="My lucky number is 007 but i got ticket number 5700";
$result = preg_split("/\s/",$string);
$result = preg_split("/[\s]/",$string); //["My","lucky","number","is","007","but","i","got","ticket","number","5700"])
$result = preg_split("/\s,/",$string); //[0] => My lucky number is 007 but i got ticket number 5700
$result = preg_split("/[\s,]/",$string); 


$result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY); //["My","lucky","number","is","007","but","i","got","ticket","number","5700"])
$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result =preg_split("//",$string);//
$result =preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);//
$result =preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY);//
echo "<pre>".print_r($result,true)."</pre>";


//preg_quote(string,delimiter);

$string = "He \'s my father, do you know him?";
$result=preg_quote($string);//He \\'s my father, do you know him\?


$result=preg_quote($string,"o"); //He \\'s my father, d\o y\ou kn\ow him\?
echo $result;


//preg_match_all(pattern,string,match/return,flags);

$string = "My lucky numbers are 227-007 & 111-222 but i got ticket number 571-100 &111221";


preg_match_all("/\d+-\d/",$string,$result,PREG_SET_ORDER);//[0] => Array(    [0] => 227-0)[1] => Array(    [0] => 111-2)[2] => Array(    [0] => 571-1)

preg_match_all("/\d+-\d/",$string,$result,PREG_PATTERN_ORDER);//[0] => Array(    [0] => 227-0    [1] => 111-2    [2] => 571-1)
echo "<pre>".print_r($result,true)."</pre>";

        //Lookahead & Lookbehind 
        //(?=) positive lookahead (or) regex lookhead =right hand side
        //(?<=) positive lookbehind (or) regex lookbehind =left hand side

        //(?!)negative lookahead (or) regex lookahead 
        //(?<! )negative lookbehind (or) regex lookbehind



        $string ="aungkyaw@cisco.com";
        $result=preg_match('/@(?=cisco)/',$string);//true (positive lookahead)
        $result=preg_match('/(?<=@)cisco/',$string);//true (positive lookbehind)
       
      
        echo $result;








?>

 <!-- $ must be in end (case sensitive) 
      ^ must be start (case sensitive) , caret or circumflex, shift+F6
      i no case senstive
      [] range a-z A-z 0-5
      m+ must contain at least one m and more
      m* must contain m or not  and more 
      m? can cotain m or not contain and more
      m{nth} contain same place or couple place m as per nth and more
      m{nth,nth} contain place m as per nth and nth and more
      m{nth,} contain place m as per nth and more

      \s space
      \d digit
      \D no digit
      \w andy word {a-z} [A-Z] [0-9] _
      \W any word @#$*
      .any ccharacter
      () this
       + must
       * can 


       p(hp)* can be contain hp 
       p(hp)+ must 
       
       [[:space:]]  space
       [[:alpha:]] alphabetic
       [[:digit:]] digit
       [[:alnum:]] alphanumeric
       [[:punct:]] punctuation
       [[:lower:]] lower case
       [[:upper:]] upper case
      
    
 -->

Local Computer
apache install
php install
mysql install

web server 

OS
1.Windows
xmapp   apache/mysql/filezila/mailserver
wamp  apache/mysql/filezila/mailserver

        windows sysyytem 32x86/64
        windows version 7 10 11
        application 80 /443

2.Linux
lamp  apache/mysql/filezila/mailserver (no par)

apache
php
mysql


WordPress
wix
cpanel
