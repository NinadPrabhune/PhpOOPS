<?php

namespace MyNamespace;  // Nmaespace Declaration
/* Magic Constants

Magic constants are the predefined constants in PHP which get changed on the basis of their use. 

They start with double underscore (__) and ends with double underscore.

They are similar to other predefined constants but as they change their values with the context, they are called magic constants.

There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).

__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
ClassName::class

All of the constants are resolved at compile-time instead of run time, unlike the regular constant. Magic constants are case-insensitive.*/

echo " Line No. : " . __LINE__ . "<br><br>";
echo " File Full Path : " . __FILE__ . "<br><br>";
echo " Directiory : " . __DIR__ . "<br><br>";
echo " The Function name is  : " . __FUNCTION__ . "<br><br>";

function MyFun()
{

    echo " The Function name is  : " . __FUNCTION__ . "<br><br>";
}

MyFun();
//---------------------------------------------
class MyClass
{

    function getClassName()
    {

        echo " The Class name is  : " . __CLASS__ . "<br><br>";

        echo " The Method name is  : " . __METHOD__ . "<br><br>";

        echo " The Namespace name is  : " . __NAMESPACE__ . "<br><br>";
    }
}

$obj = new MyClass();
echo $obj->getClassName();
//---------------------------------------------
trait MyTrait
{

    function getTraitName()
    {

        echo " The Trait name is  : " . __TRAIT__ . "<br><br>";
    }
}

class MyClass1
{

    use MyTrait;
}

$obj1 = new MyClass1();
echo $obj1->getTraitName();
