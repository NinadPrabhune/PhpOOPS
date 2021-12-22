<?php

// Create New Class From Base / Parent Class is called Inheritance

// Newly created class called as Derived / Child Class

// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

// inherited class is defined by using the extends keyword.

// Inheritance has three types, single, multiple and multilevel Inheritance.

// PHP supports only single inheritance, where only one class can be derived from single parent class.

// We can simulate multiple inheritance by using interfaces.
class Employee
{
    public $name; //prorerties $name global scope
    public $age;
    public $salary;

    public function __construct($n, $a, $s)
    {

        echo "Employee Constructor";

        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }

    public function info()
    {

        echo "<h3> Employee Profile </h3>";
        echo "Employee Name :- " . $this->name . "<br>";
        echo "Employee Age :- " . $this->age . "<br>";
        echo "Employee Salary :- " . $this->salary . "<br><br>";
    }

}

class Manager extends Employee
{

    public $TrivalAllounce = 10000;
    public $PhoneAllounce = 10000;
    public $TotalSalary;

    public function __construct()
    {
        echo "Manager Constructor";

    }

    public function info()
    {

        $this->TotalSalary = $this->salary + $this->TrivalAllounce + $this->PhoneAllounce;

        echo "<h3> Manager Profile </h3>";
        echo "Employee Name     :- " . $this->name . "<br>";
        echo "Employee Age      :- " . $this->age . "<br>";
        echo "Employee Salary   :- " . $this->TotalSalary . "<br><br>";
    }

}

$e1 = new Employee("Ram", 25, 65000);
$e1->info();

$m1 = new Manager("Krishna", 35, 150000);
$m1->info();





