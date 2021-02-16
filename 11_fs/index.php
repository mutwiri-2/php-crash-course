<?php
// Magic constants - constants that change their value based on the execution context
echo __DIR__ . '<br>'; // prints current directory of file
echo __FILE__ . '<br>'; // prints current file
echo __LINE__ . '<br>'; // prints the line number executing

// Create directory
mkdir('test');

// Rename directory
rename('test', 'test1');

// Delete directory
rmdir('test1');

// Read files and folders inside directory
$files = scandir('./'); //current directory
echo '<pre>';
var_dump($files);
echo '</pre>';

$files = scandir('../'); //parent directory
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt') . '<br>';
file_put_contents('sample.txt', "Some sample content");
echo file_get_contents('sample.txt') . '<br>';

// file_get_contents from URL
$userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($userJson); // gives an object
echo '<pre>';
var_dump($users);
echo '</pre>';

// convert to associative array
$users = json_decode($userJson, true);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('sample.txt');

// is_dir
// filemtime
// filesize
// disk_free_space
// file