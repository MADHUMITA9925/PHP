<?php
$numbers = array();

for ($i = 0; $i < 5; $i++) {
    $numbers[$i] = rand(1, 100);
}

echo "Array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

$max = max($numbers);
$min = min($numbers);

echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min;
?>