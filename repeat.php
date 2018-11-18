<?php

class Stud
{
    public $name = 'alex'; 
    public $fem = true;    




    public function Data() {

        var_dump(get_class($this));
//     return  get_class($this);


    }
}
$stud = new Stud();
//echo $stud->name;
//echo $stud->fem;
echo $stud->Data();




?>