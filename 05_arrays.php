<?php

// Create array
$fruits =  ["Bananas", "Apple", "Oranges"]; //array(); 


// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[0]. '<br>';
echo $fruits[1]. '<br>';
echo $fruits[2]. '<br>';
echo $fruits[3]. '<br>';

// Set element by index

$fruits[3] = "Mango";
echo '<pre>';
var_dump($fruits);
echo '</pre>';
$fruits[0] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index
var_dump(isset($fruits[2])); //true
var_dump(isset($fruits[4])); //false

// Append element
$fruits[] = 'Peaches';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits) . '<br>';

// Add element at the end of the array
array_push($fruits, "Lemons");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Darts');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$str = "The quick brown fox";
echo '<pre>';
$strArray = explode(" ", $str);
var_dump($strArray);
echo '</pre>';

// Combine array elements into string
echo implode(" ", $strArray);

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays