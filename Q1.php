<!DOCTYPE html>
<html>
<head>
    <title>String Analysis</title>
</head>
<body>

<h2>String Analysis</h2>

<form method="post">
    Enter a sentence:
    <input type="text" name="sentence" required>
    <input type="submit" value="Analyze">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sentence = $_POST["sentence"];
    $characters = strlen($sentence);
    $words = str_word_count($sentence);
    $vowels = 0;
    $consonants = 0;

    for ($i = 0; $i < strlen($sentence); $i++) {

        $ch = strtolower($sentence[$i]);

        if ($ch >= 'a' && $ch <= 'z') {

            if ($ch == 'a' || $ch == 'e' || $ch == 'i' ||
                $ch == 'o' || $ch == 'u') {

                $vowels++;

            } else {
                $consonants++;
            }
        }
    }

    echo "<h3>Result</h3>";
    echo "Number of characters: " . $characters . "<br>";
    echo "Number of words: " . $words . "<br>";
    echo "Number of vowels: " . $vowels . "<br>";
    echo "Number of consonants: " . $consonants;
}

?>

</body>
</html>