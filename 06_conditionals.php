<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "Age is $age" . '<br>';
}

// Without circle braces
if ($age === 20) echo "Age is $age" . '<br>';

// Sample if-else
if ($age !== 20) {
    echo "Age is not $age" .'<br>';
}else{
    echo "Age is $age" . '<br>';
}

// Difference between == and ===
var_dump($age == 20); // == only compares values
echo '<br>';
var_dump($age == '20');
echo '<br>';

var_dump($age === 20);
echo '<br>';
var_dump($age === '20'); // compares values and types
echo '<br>';


// if AND
if ($age === 20 && $salary === 300000) {
    echo "Age is $age and salary is $salary".'<br>';
}

// if OR
if ($age === 20 || $salary === 300000) {
    echo "Age is $age and salary is $salary".'<br>';
}

// Ternary if

// Short ternary

// Null coalescing operator

// switch
