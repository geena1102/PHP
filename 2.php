<?php
function isPrime($number) {
    // 1 is not a prime number
    if ($number <= 1) {
        return false;
    }
    // 2 and 3 are prime numbers
    if ($number <= 3) {
        return true;
    }
    // Check divisibility by 2 and 3
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    // Check divisibility by numbers of the form 6k ± 1 up to sqrt(number)
    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}

// Test the function with a sample number
$testNumber = 29;
if (isPrime($testNumber)) {
    echo "$testNumber is a prime number.";
} else {
    echo "$testNumber is not a prime number.";
}
?>
