<!-- 
5. Downward triangle star pattern in PHP

*****
****
***
**
* 
-->

<?php
// downward triangle pattern
$size = 25;
for ($i = 0; $i < $size; $i++) {
    // print stars
    for ($j = 0; $j < $size - $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>