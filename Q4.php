<!DOCTYPE html>
<html>
<head>
    <title>Character Occurrence</title>
</head>
<body>

<h2>Character Occurrence</h2>

<form method="post">
    Enter a string:
    <input type="text" name="str" required>
    <br><br>

    Enter a character:
    <input type="text" name="char" maxlength="1" required>
    <br><br>

    <input type="submit" value="Count">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST["str"];
    $char = $_POST["char"];

    $count = 0;

    // Count character occurrence
    for ($i = 0; $i < strlen($str); $i++) {

        if ($str[$i] == $char) {
            $count++;
        }
    }

    echo "<h3>Result</h3>";
    echo "Character '" . $char . "' occurs " . $count . " times.";

}

?>

</body>
</html>