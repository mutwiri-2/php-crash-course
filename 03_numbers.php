<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
$a += $b; echo $a . '<br>';
$a -= $b; echo $a . '<br>';
$a *= $b; echo $a . '<br>';
$a /= $b; echo $a . '<br>';
$a %= $b; echo $a . '<br>';

// Increment operator
echo $b++ . '<br>'; //prints value first then increases it
echo ++$b . '<br>'; //increases value first then prints it

// Decrement operator
echo $a-- . '<br>'; //prints value first then increases it
echo --$a . '<br>'; //increases value first then prints it

// Number checking functions
echo is_float(1.25) . '<br>';
echo is_double(455531.87) . '<br>';
echo is_int(-23) . '<br>';
echo is_integer(10) . '<br>';
echo is_numeric("3.45") . '<br>';
echo var_dump(is_numeric("3g.09")) . '<br>';

// Conversion
$strNumber = '12.34';
$num = (float)$strNumber;
var_dump($num);
$number = (int)$strNumber; //drops everything after decimal
var_dump($number);

$stringNum = '45.09';
$numFloat = floatval($stringNum);
var_dump($numFloat);
$numInt = intval($stringNum);
var_dump($numInt);


// Number functions
echo '<br>' . "abs(-15) = " . abs(1.5) . '<br>';
echo "pow(2,3) = " . pow(2,3) . '<br>';
echo "max(2,3,9,5,6,7) = " . max(2,3,9,5,6,7) . '<br>';
echo "min(2,3,9,5,6,7) = " . min(2,3,9,5,6,7) . '<br>';
echo "pow(2,3) = " . pow(2,3) . '<br>';
echo "round(2.4) = " . round(2.4) . '<br>';
echo "round(2.6) = " . round(2.6) . '<br>';
echo "floor(2.6) = " . floor(2.6) . '<br>'; // round down
echo "ceil(2.4) = " . ceil(2.4) . '<br>'; // round up

// Formatting numbers

// https://www.php.net/manual/en/ref.math.php
