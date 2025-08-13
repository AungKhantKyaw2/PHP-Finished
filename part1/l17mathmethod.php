<?php

// abs(number) Function
echo abs(32);//32
echo abs(-32);//32
echo abs(32.75);//32.75
echo abs(-32.75);//32.75


//=>round(number) Function
//=>round(number, precision) Function
echo round(32.64);//33
echo round(32.56);//33
echo round(32.44);//32
echo round(-32.64);//-33
echo round(32.64325,2);//32.64
echo round(32.64765,2);//32.65


//=>ceil(number) Function

echo ceil(32.64);//33
echo ceil(32.54);//33
echo ceil(32.44);//32

echo ceil(-32.64);//-32
echo ceil(-32.54);//-32
//=>floor(number) Function

echo floor(32.64);//32
echo floor(32.54);//32
echo floor(32.44);//32


echo floor(-32.64);//-33
echo ceil(-32.54);//-33


//=>max(number) Function
echo max(2,4,20,6,8,10);//20
echo max(2,4,20,6,-40,8,10);//20
echo max(2,4,"100",20,6,-40,8,10);//100
echo max([2,4,"100",20,6,-40,8,10]);//100


//=>min(number) Function
echo min(2,4,20,6,8,10);//2
echo min(2,4,20,6,-40,8,10);//-40
echo min(2,4,"100",20,6,-40,8,10);// -40
echo min([2,4,"100",20,6,-40,8,10]);//-40

// pow(base, exponent) Function
echo pow(2,4);//16
echo pow(3,4);//81

//=>log(number,base) Logarithm Function

echo log(10,2);//3.3219280948874
echo log(20,2);//4.3219280948874
echo log(80,3);//3.9810705715031

// sqrt(nunber) Function
echo sqrt(4);//2
echo sqrt(9);//3
echo sqrt(0.81);//0.9
echo sqrt(-4);//NAN



// rand() Function

echo rand();//0 to 2147483647

//=getrandmax() Function
echo getrandmax();//2147483647

//=> rand(min, max) Function
echo rand(1000,10000);//6165


$users= ["aung aung","kyaw kyaw","zaw zaw","nu nu","su su","hla hla"];
echo $users[rand(0,sizeof($users))];


//=>microtime() Function   //a very shrort time as 0.01 million of a second

echo microtime();//0.09927600 1743131121
echo microtime(true);//1743131121.0993

//uniqid() Function
echo uniqid();//5f4e1c0a2b3d8

// =>number_format(number,decimals) Function
// =>number_format(number,decimals,decimal-separator,thousands_separator) Function

echo number_format(1500,2);//1,500.00
echo number_format(12500000,2);//1,250,000.00
echo number_format(12500000,2);//1,250,000.00
echo number_format(12500000,2,'.'',');//1,250,000.00
echo number_format(12500000,2,'.''-');//1-250-000.00
echo number_format(12500000,0,'.''-');//1-250-000
?>