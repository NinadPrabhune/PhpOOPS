<?php

// A class is a template for objects, and an object is an instance of class.

// In a class, variables are called properties and functions are called methods!

// Objects of a class is created using the new keyword.

// The $this keyword refers to the current object, and is only available inside methods.

// You can use the instanceof keyword to check if an object belongs to a specific class:


class Calculation
{

    public $a, $b, $res1, $res2; //prorerties

    public function Sum()
    { // methods / functions 1
        $res1 = $this->a + $this->b;
        return $res1;
    }

    public function Sub()
    { // methods / functions 2
        $res2 = $this->a * $this->b;
        return $res2;
    }
}
$cal1 = new Calculation(); // creating object
$cal1->a = 100;
$cal1->b = 120;
echo $cal1->Sum() . "<br>";
echo $cal1->Sub() . "<br><br>";

$cal2 = new Calculation(); // creating object
$cal2->a = 1110;
$cal2->b = 12890;
echo $cal2->Sum() . "<br>";
echo $cal2->Sub() . "<br>";


$cal123='';

var_dump($cal1 instanceof Calculation);
var_dump($cal123 instanceof Calculation);