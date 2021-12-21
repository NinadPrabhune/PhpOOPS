<?php
class Calculation
{

    public $a, $b, $res1, $res2; //prorerties

    public function Sum()
    { // methods / functions 1
        $res1 = $this->a + $this->b;
        return $res1;
    }

    public function Sub()
    { // methods / functions 2
        $res2 = $this->a * $this->b;
        return $res2;
    }
}
$cal1 = new Calculation(); // creating object
$cal1->a = 100;
$cal1->b = 120;
echo $cal1->Sum() . "<br>";
echo $cal1->Sub() . "<br><br>";

$cal2 = new Calculation(); // creating object
$cal2->a = 1110;
$cal2->b = 12890;
echo $cal2->Sum() . "<br>";
echo $cal2->Sub() . "<br>";
