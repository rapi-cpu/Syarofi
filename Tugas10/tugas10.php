<?php

function isPrime($number) {
    
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true; 
}

echo "Bilangan prima antara 1 hingga 50 adalah:\n";
for ($num = 1; $num <= 50; $num++) {
    if (isPrime($num)) {
        echo $num . " ";
    }
}
?>