<!-- 
3. Left triangle star pattern in PHP

*
**
***
****
***** 
-->

<?php
// left triangle pattern
$size = 25;
for ($i = 0; $i < $size; $i++) {
    // print column
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>