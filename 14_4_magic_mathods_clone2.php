


<?php

class student{


    public $course;
    public $name;

    public function __construct($n) 
    {
        $this->name=$n;
        
    }


}

// case 1
// $student1 = new student('Ninad');

// $student2 =$student1;

// $student2->name = 'Krishna'; // object by default copy by referance

// var_dump($student1->name);  


// case 2


$student1 = new student('Ninad');

$student2 = clone $student1; // copy by value

$student2->name = 'Krishna'; 

var_dump($student1->name);  


?>