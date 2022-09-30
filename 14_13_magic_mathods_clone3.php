


<?php

class student
{

    public $name;
    public $course;


    public function __construct($n)
    {
        $this->name = $n;
    }


    public function SetCourse(course $c)
    {
        $this->course = $c;
    }

    public function __clone()
    {
        $this->course = clone $this->course; // solution

    }
}

class course
{

    public $cname;

    public function __construct($cn)
    {
        $this->cname = $cn;
    }
}



// case 1

// $student1 = new student('Ninad');

// $cource1 = new course('PHP');

// $student1->SetCourse($cource1);

// $student2 = clone $student1; // copy by value

// $student2->name = 'Krishna'; 

// var_dump($student1);  

// var_dump($student2); 


// case 2

// problem  not changing value of sub object

$student1 = new student('Ninad');

$cource1 = new course('PHP');

$student1->SetCourse($cource1);

$student2 = clone $student1; // copy by value

$student2->name = 'Krishna';

$student2->course->cname = 'Python';

var_dump($student1);

var_dump($student2);
?>