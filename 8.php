<?php
function sumOfDigits($number) {
    // Ensure the number is positive
    $number = abs($number);
    
    // Initialize the sum
    $sum = 0;
    
    // Loop through each digit of the number
    while ($number > 0) {
        // Add the last digit to the sum
        $sum += $number % 10;
        
        // Remove the last digit from the number
        $number = intval($number / 10);
    }
    
    return $sum;
}

// Example usage:
$integer = 678;
echo "The sum of the digits of $integer is " . sumOfDigits($integer);
?>
