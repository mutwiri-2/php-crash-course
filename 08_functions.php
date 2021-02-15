<?php

// Function
function hello()
{
    echo "Hello World, I am Mutwiri" . '<br>';
}
hello();

// Function with argument and return statement
function hello1($name)
{
    return "Hello $name" . '<br>';
}
echo hello1('Kevin');
echo hello1('Mutwiri');
echo hello1('Mwenda');

// Create sum of two function
function sumOfTwo($num1, $num2)
{
    return $num1 + $num2;
}
echo sumOfTwo(90, 20);

// Create function to sum all numbers using ...$nums

// Arrow functions
