<!-- 
12. Hourglass star pattern in PHP

*********
 *******
  *****
   ***
    *
   ***
  *****
 *******
********* 
-->

<?php
$size = 25;

// reversed pyramid star pattern
for ($i = 0; $i < $size; $i++) {
    // printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < ($size - $i) * 2 - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
// pyramid star pattern
for ($i = 2; $i <= $size; $i++) {
    // printing spaces
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>