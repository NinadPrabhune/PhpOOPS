<!-- copy by value -->

<?php
$a=5;
$b=$a;
$b=10;
var_dump($a);
?>


<!-- copy by referance  -->
<?php
$a=5;
$b=& $a; // address of $a
$b=10;
var_dump($a);
?>