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

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
