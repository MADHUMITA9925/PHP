<?php
function findLargest($a, $b, $c) {
    $largest = $a;

    if ($b > $largest) {
        $largest = $b;
    }
    if ($c > $largest) {
        $largest = $c;
    }

    return $largest;
}

echo "Largest number is: " . findLargest(45, 89, 23);
?>