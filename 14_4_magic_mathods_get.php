<!-- when you r calling undefined property or private property directely outside class in give 
undefined property / fatal error message  -->
<!-- to avoide this  error massage we  use __get method -->

<!-- It automatically Call when non existing or Private property called -->

<?php

// class abc{   


// }

// $test = new abc();
// $test->name;



// class abc{

//  private $name='Ninad';


// }

// $test = new abc();
// $test->name;


class abc
{

    private $name = 'Ninad';

    public function __get($property)
    {
        echo "You are trying to access Undefine Or Private property : '" . $property . "'";
    }
}

$test = new abc();
$test->name;

?>