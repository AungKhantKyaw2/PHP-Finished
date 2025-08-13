<?php

// echo("Hello Myanmar");
// echo("Hello Srilanka");
// echo "Hello Thailand";
// echo "Hello Indonesia";

// echo "Hello Myanmar",'I love Myanmar';
// echo "Hello Myanmar",'I love Myanmar',"Bye Bye";


// echo("Hello Myanar",'I love Myanmar');//error


// print "Hello Myanmar";
// print ("Hello Thailand");

// print("Hello Myanar",'I love Myanmar');//error
// print("Hello Myanar",'I love Myanmar');//error


// echo "hay";
// echo "<br/>";
// echo 500;
// echo (300);
// echo 456.23;

// echo true;
// echo false;
// echo null;


// //Special Escape character(\)

// echo "He's my brother";
// print "She's my sister";

// echo 'He\'s my brother';
// print 'She\'s my sister';

// echo 'He\'s my brother,he\'s a doctor';
// print "She\"s my sister, she\"s a doctor";

$colors=["red","green","blue","black","white","pink"];
echo $colors;// error
print $colors;//error
echo count($colors);//6

print_r($colors);
print_r($colors,false);

echo "<pre>".print_r($colors)."</pre>";//1
echo "<pre>".print_r($colors,false)."</pre>";//1
echo "<pre>".print_r($colors,true)."</pre>";



?>