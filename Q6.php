<!DOCTYPE html>
<html>
<head>
    <title>GCD and LCM</title>
</head>
<body>

<h2>GCD and LCM Calculator</h2>

<form method="post">

    Enter first integer:
    <input type="number" name="num1" required>
    <br><br>

    Enter second integer:
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Find GCD using Euclidean Algorithm
    $a = abs($num1);
    $b = abs($num2);

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    $gcd = $a;

    // Find LCM
    $lcm = abs(($num1 * $num2) / $gcd);

    // Verify relationship
    $left = $gcd * $lcm;
    $right = abs($num1 * $num2);

    echo "<h3>Result</h3>";

    echo "First Number: " . $num1 . "<br>";
    echo "Second Number: " . $num2 . "<br>";
    echo "GCD: " . $gcd . "<br>";
    echo "LCM: " . $lcm . "<br><br>";

    echo "<b>Verification:</b><br>";

    echo "GCD × LCM = " . $left . "<br>";
    echo "Number 1 × Number 2 = " . $right . "<br>";

    if ($left == $right) {
        echo "<br><b>Relationship Verified: GCD × LCM = Number 1 × Number 2</b>";
    } else {
        echo "<br><b>Relationship Not Verified</b>";
    }
}

?>

</body>
</html>