
<?php 


$name = array('giann' => 34 , 'alex'=> 21,'danios'=> 34,'dan'=> 50);
$counted = array_count_values($name);


//print_r($counted);

foreach($counted as $key=>$value)
{
    
if ($value >1 )
{
// echo 'yes same value' . $value;
  print_r($counted); 
    echo $key.'=>'.$value;
}
    
    
     
}

//

//if($counted >= 2){
//    echo "exist";
//}
//else{
//    echo "no exist";
//}

?>