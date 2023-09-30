<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $direction = $_POST["direction"];
    $converted_temperature = 0;

    if ($direction == "c_to_f") {
        $converted_temperature = ($temperature * 9/5) + 32;
    } elseif ($direction == "f_to_c") {
        $converted_temperature = ($temperature - 32) * 5/9;
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="temperature">Enter Temperature:</label>
    <input type="number" name="temperature" required>

    <label for="direction">Select Conversion Direction:</label>
    <select name="direction">
        <option value="c_to_f">Celsius to Fahrenheit</option>
        <option value="f_to_c">Fahrenheit to Celsius</option>
    </select>

    <button type="submit">Convert</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Result:</h2>";
    echo "<p>{$temperature}&deg; " . (($direction == "c_to_f") ? "Celsius" : "Fahrenheit") . " is {$converted_temperature}&deg; " . (($direction == "c_to_f") ? "Fahrenheit" : "Celsius") . "</p>";
}
?>

</body>
</html>
