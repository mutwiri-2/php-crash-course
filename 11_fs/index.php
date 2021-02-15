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

// file_get_contents from URL

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file