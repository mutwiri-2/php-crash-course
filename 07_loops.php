<?php

// while
// while (true) {
//     echo "Online..." . '<br>';
// } // infinite loop

$counter = 0;
while ($counter < 20) {
    echo $counter . '<br>';
    if ($counter === 10) {
        break;
    }
    $counter++;
}

// Loop with $counter

$counter = 0;
while ($counter < 20) {
    echo $counter . '<br>';
    $counter++;
}

// do - while
$i = 5;
do {
    echo $i . '<br>';
    $i++;
} while ($i < 20);

// for
for ($i=15; $i>0; $i--) {
    echo $i . '<br>';
}

// foreach

// Iterate Over associative array.