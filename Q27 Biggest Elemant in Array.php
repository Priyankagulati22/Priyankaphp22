<?php
// Define an array
$array = [3, 5, 7, 2, 8, 1, 6];

// Initialize the first element as the largest
$largest = $array[0];

// Loop through the array to compare each element
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $largest) {
        $largest = $array[$i];
    }
}

// Output the largest number
echo "The largest number is: " . $largest;

echo("<br>This program is written by Priyanka Gulati<br>ERPID-0221BCA040");
?>
