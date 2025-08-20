<?php
    # Recursive Function -> Recursion is the technique of making a function call itself. This technique provides a way to break complicated problems down into simple problems which are easier to solve.

    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    // Test
    $number = 5;
    $result = factorial($number);
    echo "Factorial of $number is $result";

?>