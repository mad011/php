
<?php 


$name = array('giann' => 34 , 'alex'=> 21,'danios'=> 34,'dan'=> 50);
$counted = array_count_values($name);




foreach($counted as $key=>$value)
{
    
if ($value >1 )
{
// echo 'yes same value' . $value;

    echo $key.'=>'.$value;
}
    
    
     
}



?>