<?php
    
        echo readfile("l28files.txt");
        echo "<br/>";
        echo filesize("l28files.txt");
        echo "<hr/>";


    $fileopen =fopen("l28files.txt","r");// fopen(filepath,acction)
    echo $fileopen;
    if($fileopen){
        echo "File exists";
        echo "<br/>";

        $filesize = filesize("l28files.txt");  
        $fileread =fread($fileopen, $filesize); // fread(fileopen, filesize)
         fclose($fileopen); // close the file
        echo $fileread;
      
    }else{
        echo "File does not exist";
    }
  
    echo "<hr/>";

    //For Linux (if permisson needed)
    //sudo chmod 777 -R /var/www/html
    //sudo chmod 775 -R /var/www/html
    
    $fileopen =fopen('l28files.txt', 'w');
    if($fileopen){
        echo "File exists";
        echo "<br/>";

        // fwrite($fileopen,"Hello Guys, I created new file");
         fwrite($fileopen,"Are you ready to learn PHP?");// overwrite

        $fileopen = fopen("l28files.txt",'r');  
        $fileread =fread($fileopen, filesize('l28files.txt')); // fread(fileopen, filesize)
                    fclose($fileopen); // close the file
        echo $fileread;
      
    }else{
        echo "File does not exist";
    }

  echo "<hr/>";

    //Note : "x" create file only return False if file alrady exists.

    $fileopen= fopen("l28newfiles.txt","x"); // create file only

    if($fileopen){
        $fileopen = fopen("l28newfiles.txt", 'r');
        fwrite($fileopen,"Hello Guys, I created new file");
        fclose($fileopen); // close the file
        echo "File exists";
        echo "<br/>";
    }else{
        echo "File  does not already exists";
        
    }
    echo "<hr/>";


//Note :"c" create file onlyy
//Note :"c+" create file and read

$fileopen =fopen("l28yourfiles.txt","c");
if($fileopen){
    echo "File exists";
    echo "<br/>";

    //  fwrite($fileopen,"Hello Guys, I created new file");
    fwrite($fileopen,"Hello Guys,Are you ready to learn PHP? hahah");// overwrite
    $fileopen =fopen("l28yourfiles.txt","c+");
    $fileread= fread($fileopen,filesize("l28yourfiles.txt"));
    fclose($fileopen); // close the file

    echo $fileread;
}
else{
    echo "File does not exist";
}
echo "<hr/>";


$fileopen = fopen('l28ourfiles.txt', 'w');

if($fileopen)
{
    echo "File exists";
    echo "<br/>";

    fwrite($fileopen,"Hello \n");
    fwrite($fileopen,"World");

    // $message = "Welcome to our class. \n";
    // fwrite($fileopen,$message);
    // $message = "Thank you for using php file system";
    // fwrite($fileopen,$message);

    $fileopen=fopen('l28ourfiles.txt','r');
    $fileread =fread($fileopen,filesize('l28ourfiles.txt'));

    fclose($fileopen);

    echo $fileread;
}
else{  
    echo "File doesn't exists";
}

echo "<hr/>";




$fileopen = fopen('l28theirfiles.txt', 'a');

if($fileopen)
{
    echo "File exists";
    echo "<br/>";

    fwrite($fileopen,"Hello\n");
    fwrite($fileopen,"World");
    $message = "Welcome to our class.\n";
    fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    fwrite($fileopen,$message);

    $fileopen=fopen('l28theirfiles.txt','r');
    $fileread =fread($fileopen,filesize('l28theirfiles.txt'));

    fclose($fileopen);

    echo $fileread;
}
else{  
    echo "File doesn't exists";
}

//-----------------------------------------

//file_get_contents() =Read
//file_put_contents(file,string)=Write
//file_exists(main,copy)/isfile =check file exists or not
//copy()= copies a file
//rename() = rename a file
//unlink() = delete a file

echo "<hr/>";

echo file_get_contents("l28files.txt");

echo "<hr/>";

$existingfile ="l28files.txt";
$namefile ="l28softfile.txt";
$message = file_get_contents($existingfile);

$message .= "\n Thanks for using php file system. \n";

file_put_contents($namefile,$message) or die("Unable to open file");



$existingfile ="l28files.txt";
$namefile ="l28sheadfile.txt";

if(file_exists($existingfile)){
    echo "File exists";
    $message = file_get_contents($existingfile);

$message .= "\n Thanks for using php file system. \n";

file_put_contents($namefile,$message) or die("Unable to open file");


}else{
    echo "File not Found";
}
    
echo "<hr/>";

$existingfile= "l28files.txt";
$namefile ="l280mainfile.txt";

if(is_file($existingfile)){
    echo "File Exists";
    $message = file_get_contents($existingfile);
$message .= "\n Thanks for using php file system. \n";
file_put_contents($namefile,$message) or die("Unable to open file");
}else{
    echo "File not Found";
}

echo "<hr/>";

//=>copy(main,copy)
$existingfile= "l28files.txt";
copy($existingfile,"l28subfiles.txt");
echo file_get_contents("l28subfiles.txt");

echo "<hr/>";

//=>rename(main,newfilename)
$existingfile= "l28subfiles.txt";
copy($existingfile,"l28webfiles.txt");
echo file_get_contents("l28webfiles.txt");

echo "<hr/>";

//unlink(main)
$existingfile= "l28webfiles.txt";

if(file_exists($existingfile)){
    unlink($existingfile);
    echo "File Delete Successfully";
}else{
    echo "File Not File";
}

//show all .txt files

echo "<pre>".print_r(glob("*.txt"),true)  ."</pre>";


echo "<hr/>";

//show all  files

echo "<pre>".print_r(glob("*.*"),true)  ."</pre>";


echo "<hr/>";




?>