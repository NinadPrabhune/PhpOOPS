<?php

trait hello
{

    private function SayHello()
    {
        echo "Hello From hello Trait <br>";
    }
}

class base
{
    use hello {
        hello::SayHello as public;  // Change Access Modifiers
        hello::SayHello as public NewHello;  // Change Access Modifiers with Rename


    }
}

$obj1 = new base();
$obj1->SayHello();
$obj1->NewHello();
