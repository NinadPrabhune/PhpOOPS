<?php
//How To Get All Dates Between Two Dates In Php?


function getDatesFromRange($start, $end, $format = 'Y-m-d') {

    // Declare an empty array
    $array = array();

    // Variable that store the date interval
    // of period 1 day
    $period = new DatePeriod(

        new DateTime($start),

        new DateInterval('P1D'), // important

        new DateTime($end)

    );

    // Use loop to store date into array
    foreach($period as $date) {   

        $array[] = $date->format($format); 
    }

    return $array;

}

$Date = getDatesFromRange('2010-10-01', '2010-10-05');

var_dump($Date);