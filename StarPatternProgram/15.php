<!-- 

15. Heart pattern

***   ***
***** *****
***********
*********
 *******
  *****
   ***
    *

     -->

<?php
// heart star pattern
$size = 30;

for ($i = $size / 2; $i < $size; $i += 2) {
    // print first spaces
    for ($j = 1; $j < $size - $i; $j += 2) {
        echo "&nbsp;&nbsp;";
    }
    // print first stars
    for ($j = 1; $j < $i + 1; $j++) {
        echo "*";
    }
    // print second spaces
    for ($j = 1; $j < $size - $i + 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // print second stars
    for ($j = 1; $j < $i + 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
// lower part
// inverted pyramid
for ($i = $size; $i > 0; $i--) {
    for ($j = 0; $j < $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j < $i * 2; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>