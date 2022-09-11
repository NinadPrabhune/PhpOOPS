<?php

// Rule

// require class name same as file name

//This function has been DEPRECATED as of PHP 7.2. 0, and REMOVED as of PHP 8.0. 0.

require "classes/first.php";
require "classes/second.php";


function __autoload($class){

    require "classes/". $class .".php";

}

$test = new first();

$test = new second();
?>

