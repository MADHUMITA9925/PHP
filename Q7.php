<!DOCTYPE html>
<html>
<head>
    <title>Distance Between Two Points</title>
</head>
<body>

<h2>Distance Between Two Points</h2>

<form method="post">

    Enter x1:
    <input type="number" name="x1" step="any" required>
    <br><br>

    Enter y1:
    <input type="number" name="y1" step="any" required>
    <br><br>

    Enter x2:
    <input type="number" name="x2" step="any" required>
    <br><br>

    Enter y2:
    <input type="number" name="y2" step="any" required>
    <br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $x1 = $_POST["x1"];
    $y1 = $_POST["y1"];
    $x2 = $_POST["x2"];
    $y2 = $_POST["y2"];

    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    echo "<h3>Result</h3>";
    echo "Euclidean Distance = " . round($distance, 2);
}

?>

</body>
</html>