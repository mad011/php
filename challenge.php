<?php

$amount_atm = $_GET["amount"]; 
$d=3;
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
$value_fin=0;
$somenew=0;
while ($amount_atm)
{
    if($money<20){
        echo "elaxista to poso einai to 20";

    }


    elseif ($money == $check){
        echo "not valid";

    }
    elseif ($money % 10 == 0){

        $givemoney=$money;

        echo "to poso einai".'</br>'.$money;


    }
    else {
        echo "to pos pou zitisate den mporei na dothei";


    }
    break;
}

/*
the first step we calculate the 20 under and 50 under-over 
*/
while($givemoney){

    if($givemoney % 50 == 0 && $givemoney<=100 ){

        $value_max= $givemoney / 50;
        echo 'to poso einai '.$value_max. 'xartonomismata twn 50 eurw';
        $condition = $givemoney;
        echo  $condition;

    }
    elseif($givemoney>=100 && $givemoney % 50 == 0)
    {
        $value_max= $givemoney / 50;
        echo 'to poso einai '.$value_max. 'xartonomismata twn 50 eurw';
        $condition = $givemoney;
        echo  $condition;
    }
    elseif($givemoney % 20 == 0 || $givemoney % 100 == 0)
    {   $condition=$givemoney;  
        $get = $givemoney / 50;
        $total = intval($givemoney,100);
        $r=$givemoney%100;
        $p=$r/20;

        echo "<br>";
        echo  "xartonomisma twn 20 ".'</br>'.$p;
        echo "<br>";
        echo  "xartonomisma twn 50 ".'</br>'.floor($get);
    }
    if($givemoney % 10 == 0 )
    {
       
        $result = $givemoney - 50 ;
        $resultf=$result;

        $total=$resultf/20;
        
        
        echo '<br>';
        echo  "xartonomisma twn 20 ".'</br>'.$total;
        echo '<br>';
        $somenew = $result/50;


        echo "xartonomisma twn 50 ".'<br>'. floor($somenew);
    }


    elseif
        ($givemoney % 20 == 0 && $givemoney<100 ){

        $value_min= $givemoney / 20;
        echo 'to poso einai '.$value_min. 'xartonomismata twn 20 eurw';



    }
    break;

}

?>
<!--end of this state-->










