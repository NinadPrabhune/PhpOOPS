<?php
// Access Modifiers

//Properties and methods can have access modifiers which control where they can be accessed.

//There are three access modifiers:

// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class


class base{

    public        $name;
    //protected     $name;
    // private       $name;

    public function __construct($n)
    {
        $this->name= $n;
    }

    
    public function show(){
    // protected function show(){
    // private function show(){    
        echo "Your Name is " . $this->name . "<br>";
    }


}

class derived extends base{

     public function get(){

        echo "Your Name is " . $this->name . "<br>";

     }

}




$test = new base("Ninad");

//$test->name="123";

$test->show();



// $test1 = new derived("derived");

// $test1->name="123";

// $test1->get();