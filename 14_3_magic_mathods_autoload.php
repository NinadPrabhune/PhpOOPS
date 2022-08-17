<?php

// Rule

// require class name same as file name
// require "classes/first.php";
// require "classes/second.php";


function __autoload($class){

    require "classes/". $class .".php";

}

$test = new first();

$test = new second();
?>

