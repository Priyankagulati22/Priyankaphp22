<?php
// Function to generate Fibonacci series
function fibonacci($n) {
    $a = 0;  // First number
    $b = 1;  // Second number
    echo "Fibonacci Series up to $n terms: \n";

    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}

// Number of terms in Fibonacci series
$num = 10;  // You can change this value
fibonacci($num);

echo("<br>This program is written by Priyanka Gulati<br>ERPID-0221BCA040");
?>
