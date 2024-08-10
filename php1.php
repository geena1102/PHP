<?php
function factorial($n) {
    if ($n < 0) {
        return "Invalid input: Factorial is not defined for negative numbers.";
    } elseif ($n == 0) {
        return 1;    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 5;
echo "The factorial of $number is " . factorial($number);
?>

