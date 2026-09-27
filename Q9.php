<!DOCTYPE html>
<html>
<head>
    <title>Reciprocal Factorial Series</title>
</head>
<body>

<h2>Reciprocal Factorial Series</h2>

<form method="post">

    Enter a positive integer n:
    <input type="number" name="n" min="1" required>
    <br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = $_POST["n"];

    $sum = 0;
    $factorial = 1;

    for ($i = 1; $i <= $n; $i++) {

        $factorial = $factorial * $i;

        $sum = $sum + (1 / $factorial);
    }

    echo "<h3>Result</h3>";

    echo "Sum of Series = " . number_format($sum, 6);
}

?>

</body>
</html>