<!-- 

8. Reverse pyramid star pattern in PHP

*********
 *******
  *****
   ***
    *
 -->

<?php
// pyramid star pattern
$size = 25;
for ($i = 0; $i < $size; $i++) {
    // print spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // print stars
    for ($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
