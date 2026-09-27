<!DOCTYPE html>
<html>
<head>
    <title>Number Property</title>
</head>
<body>

<h2>Number Property</h2>

<form method="post">
    Enter an integer:
    <input type="number" name="num" required>
    <br><br>

    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = $_POST["num"];

        $prime = true;

    if ($num <= 1) {
        $prime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $prime = false;
                break;
            }
        }
    }

        $temp = $num;
    $sum = 0;
    $digits = strlen((string)$num);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum = $sum + pow($digit, $digits);
        $temp = intdiv($temp, 10);
    }

    $armstrong = ($sum == $num);

        $reverse = strrev((string)$num);

    $palindrome = ((string)$num == $reverse);

        echo "<h3>Result</h3>";

    if ($prime) {
        echo "Prime: Yes<br>";
    } else {
        echo "Prime: No<br>";
    }

    if ($armstrong) {
        echo "Armstrong: Yes<br>";
    } else {
        echo "Armstrong: No<br>";
    }

    if ($palindrome) {
        echo "Palindrome: Yes<br>";
    } else {
        echo "Palindrome: No<br>";
    }
}

?>

</body>
</html>