<?php
function findHCF($num1, $num2) {
    // Ensure both numbers are positive
    $num1 = abs($num1);
    $num2 = abs($num2);

    // Use the Euclidean algorithm to find HCF
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2; // Remainder
        $num1 = $temp; // Update num1
    }

    return $num1; // The HCF is in num1
}

// Example usage
$number1 = 48; // You can change this number to test with different values
$number2 = 18; // You can change this number to test with different values
$hcf = findHCF($number1, $number2);
echo "The HCF of $number1 and $number2 is: " . $hcf;

echo("<br>This program is written by Priyanka Gulati<br>ERPID-0221BCA040");
?>