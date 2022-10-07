<!--  
    
PHP trait’s method conflict resolution

Overriding trait method

    -Same Function name in diffrent Class

    -When a class uses multiple traits that share the same method name, PHP will raise a fatal error.

    -you can instruct PHP to use the method by using the "inteadof" keyword.


Aliasing trait method

    -By using aliases for the same method name of multiple traits, 
     you can reuse all the methods in those traits.

    -You use the "as" keyword to alias a method of a trait to a different name within the class that uses the trait. 
  

Note 

Priority
- 1) child Class 
- 2) Trait class
- 3) base / parent Class

-->

<?php

trait hello
{

    public function SayHello()
    {
        echo "Hello From hello Trait <br>";
    }
}

trait hi
{

    public function SayHello()
    {
        echo "Hello From hi Trait <br>";
    }
}

// 1 condition 
// Priority

// class base{  

//     public function SayHello(){
//         echo "Hello From Base <br>";
//     }
// }

// class child extends base{

//     use hello;

//     public function SayHello(){
//         echo "Hello From Child Class <br>";
//     }
// }

// $obj=new child();
// $obj->SayHello();



// 2 Condition
// collisions Error Same Function

class base
{
    use hello, hi {
        hello::SayHello insteadof hi;          // Chooseing function
        hi::SayHello as NewHellow;             //Rename
    }
}

$obj1 = new base();
$obj1->SayHello();
$obj1->NewHellow();
?>