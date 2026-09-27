<!DOCTYPE html>
<html>
<head>
    <title>String Transformation</title>
</head>
<body>

<h2>String Transformation</h2>

<form method="post">
    Enter a string:
    <input type="text" name="str" required>
    <input type="submit" value="Transform">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST["str"];

    // Convert to uppercase
    $uppercase = strtoupper($str);

    // Convert to lowercase
    $lowercase = strtolower($str);

    // Replace spaces with hyphens
    $hyphen = str_replace(" ", "-", $str);

    echo "<h3>Result</h3>";

    echo "Uppercase: " . $uppercase . "<br>";
    echo "Lowercase: " . $lowercase . "<br>";
    echo "Spaces replaced with hyphens: " . $hyphen;
}

?>

</body>
</html>