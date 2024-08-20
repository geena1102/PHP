<?php
function printFibonacci($terms) {
    if ($terms <= 0) {
        return;    }
    if ($terms == 1) {
        echo "0\n";
        return;
    }

    $a = 0;
    $b = 1;

    echo "$a\n"; 

    if ($terms > 1) {
        echo "$b\n"; 
    }

    
    for ($i = 2; $i < $terms; $i++) {
        $c = $a + $b; 
        echo "$c\n"; 
        $a = $b;     
        $b = $c;
    }
}

$numberOfTerms = 10; 
printFibonacci($numberOfTerms);
?>
