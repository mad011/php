<?php

$amount_atm = $_GET["amount"]; 

$counter =0;
$money = array(10,30,50,100);
//var_dump($money);



foreach ($money as $value) {

    if ($value == $amount_atm){

        //        $amount_atm=$amount_atm+10;
        echo  "get the money".$value; 
        break;
    }    
    else
    {
        echo "no";


    }



}

?>

