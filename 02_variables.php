<?php

// What is a variable

echo "A variable is a container that stores some value." . '<br>';
echo "PHP is a loosely typed language meaning that variables do not have types.
The programmer does not specify the type when declaring variables and the
variables have dynamic types i.e their type changes based on the value assigned.";
echo '<br>' . "Variable names must start with letter or underscore and can
 contain digits as well" . '<br>';
echo "Syntax of declaring a variable is \$variable_name = value;".'<br>';



// Variable types
echo "Variable types in PHP are:".'<br>';
echo "String".'<br>';
echo "Integer".'<br>';
echo "Float / Double".'<br>';
echo "Boolean".'<br>';
echo "NULL".'<br>';
echo "Array".'<br>';
echo "Object".'<br>';
echo "Resource".'<br>';


// Declare variables

$name = 'Mutwiri Mwenda';
$age = 100;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables.

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';
echo "\$isMale value is true but the browser outputs 1, because whenever a Boolean
is converted to a String (e.g when we try to print the boolean variable), the true
value is converted to 1 and false value will be converted to an empty string";
echo "NULL values are also converted to an empty string when we print them out.";
echo '<br>';


// Print types of the variables

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';
echo gettype(false).'<br>';

// Print the whole variable

// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined

// Constants

// Using PHP built-in constants
?>