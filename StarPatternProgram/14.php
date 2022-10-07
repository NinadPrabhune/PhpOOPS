<!-- 

14. Left pascal star pattern

*
**
***
****
*****
****
***
**
*

 -->


<?php
$size = 25;

for ($i = 1; $i <= $size; $i++) {
    for ($j = 0; $j < $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <= $size - 1; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $size - $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>