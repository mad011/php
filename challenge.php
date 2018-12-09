<?php

$amount_atm = $_GET["amount"]; 

$check=30;
$min=0;
$value_max=50;
$value_min=20;    
//$givemoney=50;


for($money=20;$money<=30;$money++){
    $money=$amount_atm;



    if($money<20){
        echo "elaxista to poso einai to 20";
        break;
    }


    elseif ($money == $check){
        echo "not valid";
        break;

    }
    elseif ($money % 10 == 0){

        $givemoney=$money;

        echo "to poso einai".$money;


    }
    else {
        echo "to pos pou zitisate den mporei na dothei";
        break;


    }



    for($i=0;$i<1;$i++){
        if($givemoney){
            $value=$givemoney/$value_max;
            $value_get = intval($value);
           
            
            echo '<br> to poso pou zitisate einai ' .$value_get.' xartonomismata twn 50eurw ' ;
           
      }
        
       

    }
    
  
        for($j=0;$j<1;$j++){
        if($givemoney % 20 == 0){

            $value_s=$givemoney/$value_min;
            $value_set=$value_s;
            
            echo '<br> to poso pou zitisate einai ' .$value_set.' xartonomismata twn 20eurw ';
        }   
        
       }
      
  

   
}






//
//for($i=0;$i<=9;$i++){
//    echo '<br>'.$i;
//    for($j=0;$j<=9;$j++){
//        
//        echo '<br>'.$j;
//          break;
//    }
//  
//}
//




//
//function name ($numf,$numd)
//{
////    $result = $numf+$numd;
////    $array_state= $result;
////    
////    $array_state=array();
////    array_push($array_state,$result);
////    print_r($array_state);
////    
//    
//  
//}
//name(10,15);

?>
