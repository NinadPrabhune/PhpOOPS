<?php
// <!-- ----------------------- Magic Methods ---------------------------
//  If you create a Magic Method function, PHP will automatically call this function when you create an object from a class.
//  Notice that the Magic Method starts with two underscores (__)!
// List of Magic Methods in PHP
// __destruct()
// example
// close mysqli_close();
class abc{

    public function __construct() 
    {
        echo "This is Construct Function <br>";
        
    }

    public function First(){
        echo "This is First Function <br>";
        
    }

    public function __destruct() 
    {
        echo "This is destruct Function <br>";
        
    }
}


$test = new abc();
$test->First();
$test->First();
$test->First();
