<?php

$A = array( -1, 3, -4, 5, 1, -6, 2, 1);



function solution($A) {

$leftEquation = array_sum($A);
$rightEquation = 0;

foreach($A as $key => $value) {

  $rightEquation += $value;

    if($rightEquation == $leftEquation){

    return $key;

  };

  $leftEquation -= $value;
};


    return -1;

  };


print_r(solution($A));

?>
