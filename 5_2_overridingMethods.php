<?php

// Overriding Methods :
// Same name of method on both classes base or derived class.
// Inherited methods can be overridden by redefining the methods (use the same name) in the child class.


class base {
    public $name ="<br> Parent Class <br>";//Same properties $name
    public function calculation($a,$b){
        return $a*$b;
    }
    
}
class derived extends base{
    public $name ="<br> Child Class <br>"; //same properties $name
    public function calculation($a,$b){
        return $a+$b;
    }  // if we run this command it gives 15 as a outupt 
    
}

$find =new derived();
echo $find->calculation(10,5); // derived class use

$find=new base();
echo $find->name; // base class use
echo $find->calculation(10,5); // base class use



?>