<!DOCTYPE html>
<html>
<head>
    <title>Alternating Power Series</title>
</head>
<body>

<h2>Alternating Power Series</h2>

<form method="post">

    Enter x:
    <input type="number" name="x" step="any" required>
    <br><br>

    Enter n:
    <input type="number" name="n" min="1" required>
    <br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $x = $_POST["x"];
    $n = $_POST["n"];

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        $term = pow($x, $i);

        if ($i % 2 == 0) {
            $sum = $sum - $term;
        } else {
            $sum = $sum + $term;
        }
    }

    echo "<h3>Result</h3>";

    echo "Sum of Series = " . $sum;
}

?>

</body>
</html>