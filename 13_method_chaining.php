<?php

// Method Chaining used for

// call methods in one line without declaring repetative object

// Rules

// 1) return $this variable in Methods



class abc{


    public function First(){
        echo "This is First Function <br>";
        return $this; // this object importent
    }

    public function Second(){
        echo "This is Second Function <br>";
        return $this; // this object importent
    }

    public function Third(){
        echo "This is Third Function <br>";
    }

}

$test = new abc();

$test->First();
$test->Second();
$test->Third();

echo " <br> <br>";

$test->First()->Second()->Third();
