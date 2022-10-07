<!-- 1. Square pattern in PHP 

*****
*****
*****
*****
***** -->

<?php
// square pattern
$size = 25;
for ($i = 0; $i < $size; $i++) {
    // print column
    for ($j = 0; $j < $size; $j++) {
        // print row
        echo "*";
    }
    // change line
    echo "<br>";
}
?>