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

// Formatting numbers

// https://www.php.net/manual/en/ref.math.php
