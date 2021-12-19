<?php
class Employee{
    public $name;                                               //prorerties $name global scope
    public $age;
    public $salary;


    function __construct($n, $a, $s)
    {

        echo "Employee Constructor";

        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
        
    }

    function info(){

        echo "<h3> Employee Profile </h3>";
        echo "Employee Name :- ". $this->name ."<br>";
        echo "Employee Age :- ". $this->age ."<br>";
        echo "Employee Salary :- ". $this->salary ."<br><br>";
    }

}


class Manager extends Employee{

    public $TrivalAllounce=10000;
    public $PhoneAllounce=10000;
    public $TotalSalary;



    function __construct()
    {
        echo "Manager Constructor";
        
    }


    function info(){


        $this->TotalSalary= $this->salary + $this->TrivalAllounce + $this->PhoneAllounce;


        echo "<h3> Manager Profile </h3>";
        echo "Employee Name     :- ". $this->name ."<br>";
        echo "Employee Age      :- ". $this->age ."<br>";
        echo "Employee Salary   :- ". $this->TotalSalary ."<br><br>";
    }






}




$e1= new Employee("Ram",25,65000);
$e1->info();

$m1= new Manager("Krishna",35,150000);
$m1->info();
?>