<?php

class Welcome{
    private $db;
  
    public function __construct()
    {   
          //   echo "i am Article Model <br/>";
             $this->db =new SystemDatabase();
        }



}

// new Article();


?>