<?php
$numbers = array();

for ($i = 0; $i < 5; $i++) {
    $numbers[$i] = rand(1, 100);
}

echo "Original Array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

sort($numbers);

echo "Sorted Array (Ascending): ";
foreach ($numbers as $num) {
    echo $num . " ";
}
?>