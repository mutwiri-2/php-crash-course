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
// Usually used for conditional statement whose code executes sth small
echo $age < 22 ? "Young" : "Old";

// Short ternary
$age1 = 0;
$myAge = $age1 ?: 26;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name:"Kevin Mutwiri";
echo $myName . '<br>';
$theName = $name ?? "Mwendaa";
echo $theName . '<br>';

// switch
$userRole = 'admin'; // editor, admin, user
switch ($userRole) {
    case 'admin':
        echo "Admin";
        break;
    case 'user':
        echo "User";
        break;
    case 'editor':
        echo "Editor";
        break;
    default:
        echo "Invalid User";
}
