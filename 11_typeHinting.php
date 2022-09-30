<!-- Type Hinting

In simple word, type hinting means providing hints to function to only accept the given data type.
In technical word we can say that Type Hinting is method by which we can force function to accept the desired data type.
In PHP, we can use type hinting for Object, Array and callable data type. -->


<?php

function Fruits(array $name)
{  //type Hinting

    foreach ($name as $name_rec) {
        echo $name_rec . "<br>";
    }
}

$test = ["Ninad", "Ninad1", "Ninad2"];
//$test="Ninad";
Fruits($test);
?>