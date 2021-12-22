<?php
// Overriding Properties :
// Same properties on both classes (base and derived class).



class base {
    public $name ="<br>Parent Class<br>"; //Same properties $name
}
class derived extends base{
    public $name ="<br>Child Class<br>"; //same properties $name
}

$find =new derived();
echo $find->name; // derived class use


$find=new base();
echo $find->name; // base class use









?>