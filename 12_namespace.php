<!-- same class name in files want to include in one file is not possible. 
with the help of namespace we achive this. 
rule 

1) write namespace on first line of both file. 

2) write namespace without space. 

3) access obj with namespace name \ class name.



<?php

require "12_namespace_test1.php";

require "12_namespace_test2.php";

function wow()
{
    echo "Wow from index file<br>";
}


$obj = new namespace1\product();

$obj = new namespace2\product();


wow();
namespace1\wow();
?>