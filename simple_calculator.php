<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];
    $result = 0;

    // Perform the selected arithmetic operation
    switch ($operation) {
        case 'addition':
            $result = $number1 + $number2;
            break;
        case 'subtraction':
            $result = $number1 - $number2;
            break;
        case 'multiplication':
            $result = $number1 * $number2;
            break;
        case 'division':
            // Check if dividing by zero
            $result = ($number2 != 0) ? $number1 / $number2 : "Undefined (division by zero)";
            break;
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number1">Enter Number 1:</label>
    <input type="number" name="number1" required>

    <label for="number2">Enter Number 2:</label>
    <input type="number" name="number2" required>

    <label for="operation">Select Operation:</label>
    <select name="operation">
        <option value="addition">Addition (+)</option>
        <option value="subtraction">Subtraction (-)</option>
        <option value="multiplication">Multiplication (*)</option>
        <option value="division">Division (/)</option>
    </select>

    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Result:</h2>";
    echo "<p>{$number1} {$operation} {$number2} = {$result}</p>";
}
?>

</body>
</html>
