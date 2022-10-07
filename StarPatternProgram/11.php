<!-- 
11. Hollow diamond star pattern in PHP

*
* *
*   *
*     *
*       *
*     *
*   *
* *
* 
-->

<?php
$size = 25;

// upside pyramid
for ($i = 1; $i <= $size; $i++) {
    // printing spaces
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        if ($k === 0 || $k === 2 * $i - 2) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
// downside pyramid
for ($i = 1; $i <= $size - 1; $i++) {
    // printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
        if ($k === 1 || $k === ($size - $i) * 2 - 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>