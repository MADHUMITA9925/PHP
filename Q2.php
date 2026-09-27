<!DOCTYPE html>
<html>
<head>
    <title>Palindrome String</title>
</head>
<body>

<h2>Palindrome String Checker</h2>

<form method="post">
    Enter a string:
    <input type="text" name="str" required>
    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST["str"];

    // Convert to lowercase
    $str = strtolower($str);

    // Remove spaces
    $str = str_replace(" ", "", $str);

    // Reverse the string
    $reverse = strrev($str);

    // Check palindrome
    if ($str == $reverse) {
        echo "<h3>The string is a Palindrome.</h3>";
    } else {
        echo "<h3>The string is NOT a Palindrome.</h3>";
    }
}

?>

</body>
</html>