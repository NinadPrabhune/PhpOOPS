<!-- PHP static Keyword

-The static keyword is used to declare properties and methods of a class as static.
-Static properties and methods can be used without creating an instance of the class (i.e. object). -->
<!-- They can be invoked directly outside the class by using scope resolution operator (::) -->


<!-- 

Rules
    -   static keyword is used to declare properties and methods.
    -   using scope resolution operator (::) we can access properties and methods directely ( without creating object )
    -   we cannot use "this" keyword, we use "self" keyword.
    -   if all properties and methods is static then we call this Class as Static Class.
    -   in inheritance for accessing properties and methods of parent class we us "Parent" Keyword.

-->

<!-- 
- after public 
- use in class self keyword
- use in inherited class parent keyword
- main benefit we not creating object 
- in real life we want to call function without calling Constructor OR Destructor then static keyword is Used

-->


<?php

class base
{
    public static $name = "<br> Parent Class <br>"; //Same properties $name

    public static function show()
    {
        echo self::$name;
    }

    public function __construct($n)
    {
        self::$name = $n;
    }
}


class derived extends base
{
    public static function show()
    {
        echo parent::$name;
    }
}


// $test = new base("Wow");
// $test->show();

echo base::$name; // access properties without obj
echo base::show(); // access method without obj


// $test = new derived();
// $test->show();
?>