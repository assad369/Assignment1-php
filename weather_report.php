<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>

<?php
$temperature = 18; // You can change this to the actual temperature

if ($temperature <= 0) {
    $message = "It's freezing!";
} elseif ($temperature <= 10) {
    $message = "It's very cold.";
} elseif ($temperature <= 20) {
    $message = "It's cool.";
} elseif ($temperature <= 30) {
    $message = "It's warm.";
} else {
    $message = "It's hot!";
}
?>

<h2>Weather Report</h2>
<p>The current temperature is <?php echo $temperature; ?>&deg;C.</p>
<p><?php echo $message; ?></p>

</body>
</html>
