<!-- It supports the concept of hierarchical classification.

Inheritance has four types, 

-Single Inheritance         (B->A)
-Multilevel Inheritance     (A->B->C)
-Hierarchical Inheritance   (B->A, C->A)
-Multiple Inheritance       (Not Possible in PHP but simulate multiple inheritance by using "interfaces")

PHP supports only single inheritance, where only one class can be derived from single parent class.

We can simulate multiple inheritance by using interfaces. -->

<!-- interfaces used for security Perpose -->


<!-- Rules of interfaces

- Class replaed with Interface Keyword.
- we canot declared properties in interfaces.
- we canot declared __constructor in interfaces.
- we canot create Object of interfaces.
- we have to declared Abstract Methods.
    -(like we declared Method but cannot implement in Interfases.)
    -(we implements in derived Class.)

- We use Implements Keyword.
- we use multiple Implements with (comma , operator).
- we must have implements all methods in derived Class.


- we canot declared Access Modifiers in interfaces.
- we can declared Access Modifiers in derived Class.
-->

<?php

interface parent1
{
    function calc($a, $b);
}

interface parent2
{
    function sub($c, $d);
}


class child implements parent1, parent2
{

    function calc($a, $b)
    {
        echo "<br>" .  ($a + $b);
    }

    function sub($c, $d)
    {
        echo "<br>" . ($c - $d);
    }
}

$obj = new child();

$obj->calc(10, 50);
echo "<br>";
$obj->sub(1015, 50);


?>