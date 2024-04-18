<?php
// Define variables
$temperature = "";
$speed = "";
$mass = "";

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    // Retrieve input values
    $temperature = $_POST['temp'];
    $speed = $_POST['speed'];
    $mass = $_POST['mass'];

    // Convert temperature;
    $fahrenheit = ($temperature * 9/5) + 32;
    $kelvin = $temperature + 273.15;

    // Convert speed;
    $metersPerSecond = $speed * 1000 / 3600; // km/h to m/s
    $knots = $speed * 0.53996; // km/h to knots

    // Convert mass;
    $grams = $mass * 1000;
    $kg = $mass;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Conversion</title>
</head>
<body>
    <h2>Measurement Conversion</h2>
    <form method="post">
        <label for="temp">Temperature (Celsius): </label>
        <input type="text" id="temp" name="temp" /><br />
        <label for="speed">Speed (km/h): </label>
        <input type="text" id="speed" name="speed" /><br />

        <label for="mass">Mass (kg): </label>
        <input type="text" id="mass" name="mass" /><br />

        <button type="submit" name="submit">Convert</button>
    </form>

    <?php
    // Display the results when the form is submitted
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        echo "<h2>Results</h2>";
        echo "Temperature:<br>";
        echo "Celsius: $temperature C<br>";
        echo "Fahrenheit: $fahrenheit F<br>";
        echo "Kelvin: $kelvin K<br><br>";

        echo "Speed:<br>";
        echo "Kilometers per hour: $speed km/h<br>";
        echo "Meters per second: $metersPerSecond m/s<br>";
        echo "Knots: $knots knots<br><br>";

        echo "Mass:<br>";
        echo "Kilograms: $mass kg<br>";
        echo "Grams: $grams g<br>";
    }
    ?>
</body>
</html>

