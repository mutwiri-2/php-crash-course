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
echo '<pre>';
var_dump(in_array('Apple',$fruits));
echo '</pre>';
echo '<pre>';
var_dump(in_array('apple',$fruits)); //case-sensitive
echo '</pre>';
echo '<pre>';
var_dump(in_array('Kiwi',$fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Apple',$fruits));
echo '</pre>';
echo '<pre>';
var_dump(array_search('Apples',$fruits)); // returns false if doesn't exist
echo '</pre>';

// Merge two arrays
$vegetables = ['Cabbage', 'Mrenda', 'Kale'];
echo '<pre>';
var_dump(array_merge($vegetables,$fruits)); // order matters
echo '</pre>';
// new merge array notation - PHP v7.4+
echo '<pre>';
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)
echo '<pre>';
var_dump($fruits);
echo '</pre>';
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

//reverse sort
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php


// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person =[
    'name' => "Kevin",
    'surname' => "Mutwiri",
    'age' => 26,
    'hobbies' => ['Basketball', 'FIFA']
];
echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo '<pre>';
var_dump($person['hobbies']);
echo '</pre>';
echo $person['name'] . '<br>';
echo $person['Surname'] . '<br>'; //prints nothing - key doesn't exist

// Set element by key
$person['country'] = "Kenya";
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if (! isset($person['address'])) {
    $person['address'] = 'Unknown';
}
echo '<pre>';
var_dump($person);
echo '</pre>';

$person['town'] = $person['town'] ?? "Nairobi";
echo '<pre>';
var_dump($person);
echo '</pre>';

$person['county'] ??= "047";
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key
var_dump(isset($person['name']));
var_dump(isset($person['Name']));

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';


// Sorting associative arrays by values, by keys
ksort($person); // by keys
echo '<pre>';
var_dump($person);
echo '</pre>';

asort($person); // by values
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays