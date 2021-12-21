<?php

class Person
{

    public $name; //prorerties $name global scope
    public $degree; //prorerties

    public function __construct($name = "No Name", $degree = "Null") //constructor $name local scope

    {
        $this->name = $name;
        $this->degree = $degree;
    }

    public function Show()
    { // methods / functions 1
        echo "Your name     : " . $this->name . "<br>";
        echo "Your degree   : " . $this->degree . "<br><br>";
    }
}

$per1 = new Person();
$per2 = new Person('Ninad Prabhune', 'MCA');
$per3 = new Person('Alon mask', 'Bachelor of Science in Physics / Bachelor of Arts in Economics');

$per1->Show();
$per2->Show();
$per3->Show();
