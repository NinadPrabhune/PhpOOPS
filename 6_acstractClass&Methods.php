<!-- What are Abstract Classes and Methods?


condition 1
- An abstract class or method is defined with the abstract keyword

condition 2
-An abstract class is a class that contains at least one abstract method. 
-An abstract method is a method that is declared, but not implemented in the code.

condition 3
- in a Abstract Classes, abstract Methods must have "implement in derived class".


- Abstract meance Uncomplete

- we cannot create object of abstract Class

- access properties and methos only in drived class 

- abstract Methods parameter must have compatible OR Same in implementation
-->

<?php

abstract class ParentClass{

    public $name;

    abstract protected function calc($a,$b);

}
class ChildClass extends ParentClass{

    public function calc($c,$d){
        echo $c + $d;
    }
}



// $test= new ParentClass(); //Error



$test1= new ChildClass();

$test1->calc(10,20);



// reallife Use 

// Student Personal Information

// inherit in library Department
// inherit in Fee Department

// bank IdProff Function




?>


