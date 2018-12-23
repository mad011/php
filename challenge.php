<?php

$amount_atm = $_GET["amount"]; 
$d=1;
$check=30;
$some = 0;
$value_max=50;
$value_min=20;  
$givemoney=0;
$money=$amount_atm;
$value=20;
$result=0;
$get=0;
$condition=0;
$total=0;
$condition_final=0;
$found = false;
while($amount_atm){
    if($money<20){
        echo "elaxista to poso einai to 20";

    }


    elseif ($money == $check){
        echo "not valid";

    }
    elseif ($money % 10 == 0){

        $givemoney=$money;

        echo "to poso einai".$money;


    }
    else {
        echo "to pos pou zitisate den mporei na dothei";


    }
    break;
}

while($givemoney){

    if($givemoney % 50 == 0 && $givemoney >= 100){

        $value_max= $givemoney / 50;
        echo 'to poso einai '.$value_max. 'xartonomismata twn 50 eurw';
        $condition = $givemoney;
        echo  $condition;

    }
    
    elseif($condition % 50 == 0 && $condition % 20 == 0)
    {
        $get = $givemoney / 50;

        //        echo floor($get);
        $total = intval($givemoney,100);
        $r=$givemoney%100;
        $p=$r/20;

        echo "<br>";
        echo  "xartonomisma twn 20 ".'</br>'.$p;
        echo "<br>";
        echo  "xartonomisma twn 50 ".'</br>'.floor($get);
        
     

    }
   
      
  

    break;
}



?>




