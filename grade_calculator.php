<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test_score1 = $_POST["test_score1"];
    $test_score2 = $_POST["test_score2"];
    $test_score3 = $_POST["test_score3"];

    // Calculate average
    $average = ($test_score1 + $test_score2 + $test_score3) / 3;

    // Determine letter grade
    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="test_score1">Test Score 1:</label>
    <input type="number" name="test_score1" required>

    <label for="test_score2">Test Score 2:</label>
    <input type="number" name="test_score2" required>

    <label for="test_score3">Test Score 3:</label>
    <input type="number" name="test_score3" required>

    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Result:</h2>";
    echo "<p>Average Score: {$average}</p>";
    echo "<p>Letter Grade: {$grade}</p>";
}
?>

</body>
</html>
uttf