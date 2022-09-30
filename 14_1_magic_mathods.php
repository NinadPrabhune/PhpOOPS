<?php
// <!-- ----------------------- Magic Methods ---------------------------


//  If you create a Magic Method function, PHP will automatically call this function when you create an object from a class.

//  Notice that the Magic Method starts with two underscores (__)!

// List of Magic Methods in PHP

// __construct()
// __destruct()
// __call($fun, $arg)
// __callStatic($fun, $arg)
// __get($property)
// __set($property, $value)
// __isset($content)
// __unset($content)
// __sleep()
// __wakeup()
// __toString()
// __invoke()
// __set_state($array)
// __clone()
// __debugInfo()  




class abc{

    public function __construct() 
    {
        echo "This is Construct Function \n";
        
    }

    public function First(){
        echo "This is First Function <br>";
        
    }
}

$test = new abc();
