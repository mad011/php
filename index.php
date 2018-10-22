<!--<?php echo "new world"; ?>-->

<?php
  global $x;
//$x=rand(1,100);
//echo $x;

for($i=0;$i<=1000;$i++)
{
echo $i .'<br>';    
if($i==1000){
    //echo $i;
$i=$x;

    
  
    
    echo $x.'<br>'."the end of break";
    break;
   } 
  
}

//}
//echo rand();
?>


<!--
/*class Person{
    
    //The name of the person.
    public  $name;
    
    //The person's date of birth.
    public  $dateOfBirth;
    
    //Set the person's name.
    public function setName($name){
        $this->name = $name;
    }
    
    //Set the person's date of birth.
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    
    //Get the person's name.
    public function getName(){
        return $this->name;
    }
    
    //Get the person's date of birth.
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

}
$person = new Person();
 
//Set the name to "Wayne"
$person->setName('Wayne');
$person->setDateOfBirth(1982);
 
//Get the person's name.
echo $age =$person->getDateOfBirth();
echo $name = $person->getName();
 
//Print it out
//echo $name;




*/
-->
