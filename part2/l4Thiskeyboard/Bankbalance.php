<?php

class Bankbalance{

    public $accum;
    public $name;
    public $balance = 0;

    public function depositamount($amount){
        $this->balance  = $this->balance + $amount;
    }


    public function checkbalance(){
        echo "Your Balance is = $this->balance";
    }

    public function deductamount($amount){
        if($this->balance <=0){
            echo "No balance, You do not have any money";
        }

        if($this->balance <$amount){
            echo "Insufficient!! , You are trying to withdraw than your main balance";
            exit;
        }
        $this->balance = $this->balance - $amount;
    }


}

$bankobj1 =new Bankbalance();
$bankobj1->accum =1000;
$bankobj1->name ="Aung Aung";
$bankobj1->balance = 200000;

$bankobj1->checkbalance();//
$bankobj1->depositamount(300000);
echo "<br/>";
$bankobj1->checkbalance();//
echo "<hr/>";

$bankobj2 = new Bankbalance();
$bankobj2->accum=1001;
$bankobj2->name ="Yu Yu";
$bankobj2->balance = 300000;

$bankobj2->checkbalance();//300000
$bankobj2->depositamount(200000);
echo "<br/>";
$bankobj2->deductamount(400000);
$bankobj2->checkbalance();//100000
$bankobj2->deductamount(30000);
echo "<br/>";
$bankobj2->checkbalance();//70000
$bankobj2->deductamount(80000);
echo "<br/>";
$bankobj2->checkbalance();


?>