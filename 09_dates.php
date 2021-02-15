<?php

// Print current date
echo date('Y-m-d H:i:s') . '<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60*60*24) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('l jS \of F Y h:i:s A') . '<br>';
echo date('F j Y H:i:s') . '<br>';

// Print current timestamp
echo time(); // seconds from 1970 Jan 1st midnight

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-12 09:00:00');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 15 2021 12:45:33';
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';