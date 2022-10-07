<!-- 
9. Hollow pyramid star pattern in PHP

*
* *
*   *
*     *
********* 
-->
<?php
// pyramid star pattern
$size = 25;
for ($i = 0; $i < $size; $i++) {
    // print spaces
    for ($j = 0; $j < $size - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // print stars
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        if ($i === 0 || $i === $size - 1) {
            echo "*";
        } else {
            if ($k === 0 || $k === 2 * $i) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
    }
    echo "<br>";
}
?>