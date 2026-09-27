<!DOCTYPE html>
<html>
<head>
    <title>Compound Interest</title>
</head>
<body>

<h2>Compound Interest Calculator</h2>

<form method="post">

    Principal Amount:
    <input type="number" name="p" step="any" required>
    <br><br>

    Annual Interest Rate (%):
    <input type="number" name="r" step="any" required>
    <br><br>

    Compounded Per Year:
    <input type="number" name="n" required>
    <br><br>

    Time Period (Years):
    <input type="number" name="t" step="any" required>
    <br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $p = $_POST["p"];
    $r = $_POST["r"];
    $n = $_POST["n"];
    $t = $_POST["t"];

    $amount = $p * pow((1 + $r / (100 * $n)), ($n * $t));

    $ci = $amount - $p;

    echo "<h3>Result</h3>";

    echo "Compound Interest = ₹" . number_format($ci, 2) . "<br>";
    echo "Final Amount = ₹" . number_format($amount, 2);
}

?>

</body>
</html>