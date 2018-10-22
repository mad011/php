<?php

class Product {
var $description = 'SKOULARIKIA';
var $weight = 0.7;
//var $pricevalue = 30;         
var $sales="false";

//public function price ($pricevalues=30)
//{
//      return $this->pricevalues=$pricevalues ;
//      
//}
//public function available(){
//return $this->sales;    
//}
//    
//public function des(){
//    return $this->description;
//}    
    
    
public function test($x,$y) {
        
        return $x+$y;
        
    }





}
 $x = new Product();
// $des = $x->description;
//echo $x->price();
////echo $x->weight;
//echo $x->available();
echo $x->test(2,1000); 
?>

