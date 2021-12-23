
<!-- 
    -The traits are used when multiple classes share the same functionality.

    -The main difference between the Traits and Interfaces in PHP is that,
     the Traits define the actual implementation of each method "within each class".

    -Traits can define both static properties and static methods.

    -Traits reduces the complexity, and avoids problems associated with multiple inheritance.

    -Note that PHP does not allow multiple inheritance. 
     So Traits is used to fulfill this gap by allowing us to reuse same functionality in multiple classes.


    Rules


     -Traits are declared with the "trait" keyword

     -To use a trait in a class, use the "use" keyword

     -A class can use multiple traits

     -PHP does not allow you to create an instance of a Trait like an instance of a class.
 -->




<?php

trait hello{

    public function SayHello(){
        echo "Hello Everyone <br>";
    }

    public function SayHi(){
        echo "Hi Everyone <br>";
    }


}
trait bye{

    public function SayBye(){
        echo "Bye Everyone <br>";
    }    

}

class base{

    use hello,bye;

}


$obj=new base();

$obj->SayHello();
$obj->SayHi();
$obj->SayBye();

?>