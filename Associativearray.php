<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Roll Number: <input type="text" name="roll"><br><br>
    Marks: <input type="text" name="marks"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $student = array(
        "name"  => $_POST['name'],
        "roll"  => $_POST['roll'],
        "marks" => $_POST['marks']
    );

    echo "<h3>Student Details</h3>";
    echo "Student Name: " . $student['name'] . "<br>";
    echo "Roll Number: " . $student['roll'] . "<br>";
    echo "Marks: " . $student['marks'];
}
?>

</body>
</html>