<?php

// Create simple string
$name = 'Mutwiri Mwenda';
$msg = 'Welcome to PHP';
// difference between single and double string strings
$string = 'Hello $name and ' . $msg . '<br>';
$string1 = "Hello $name and " . $msg . '<br>';

echo $string;
echo $string1;

// String concatenation
echo 'Hello' . ' World' . ' PHP' .'<br>';

// String functions
$str = "    Hello World     ";

echo "1 -- " . strlen($str) . '<br>';
echo "2 -- " . trim($str) . '<br>';
echo "3 -- " . ltrim($str) . '<br>';
echo "4 -- " . rtrim($str) . '<br>';
echo "5 -- " . str_word_count($str) . '<br>'; //number of words
echo "6 -- " . strrev($str) . '<br>';
echo "7 -- " . strtoupper($str) . '<br>';
echo "8 -- " . strtolower($str) . '<br>';
echo "9 -- " . ucfirst('hello world') . '<br>'; // converts first letter of first word
echo "10 -- " . lcfirst('Hello World') . '<br>'; // converts first letter of first word
echo "11 -- " . ucwords('hello world from kenya') . '<br>';
echo "12 -- " . strpos($str, 'world') . '<br>';
echo "13 -- " . stripos($str, 'world') . '<br>';
echo "14 -- " . substr($str, 0) . '<br>';
echo "15 -- " . substr($str, 2) . '<br>';
echo "16 -- " . substr($str, 2, 12) . '<br>';
echo "17 -- " . str_replace('world', 'PHP', $str) . '<br>';
echo "18 -- " . str_ireplace('world', 'PHP', $str) . '<br>';


// Multiline text and line breaks
$longText = "
Hello, my name is Kevin,
I am 26 and,
I love programming
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';
// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php