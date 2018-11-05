




<?php
$counter=0;
$amount = $_GET['amount'];
$pin = $_GET['pin'];
$submit = $_GET['submit'];







if ($pin == "test"  || $counter == 2) {
    echo 'προχωρηστε στην συναλλαγή!';
  

} else {
    echo 'απομένουν δυο προσπάθειες.';
   
    $counter++;
    echo "<br>";
    echo "first attempt".$counter;
   
   


}


?>
