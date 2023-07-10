<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>
    <h1>BMI Calculator</h1>
    <form method="post" action="">
        <label for="weight">Weight (in kg):</label>
        <input type="number" step="0.01" name="weight" id="weight" required><br><br>
        <label for="height">Height (in cm):</label>
        <input type="number" step="0.01" name="height" id="height" required><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"] / 100; // Convert cm to meters

        // Calculate BMI
        $bmi = $weight / ($height * $height);

        // Display the result
        echo "<h2>Result</h2>";
        echo "Weight: $weight kg<br>";
        echo "Height: $height m<br>";
        echo "BMI: " . number_format($bmi, 2);

        // Interpret the BMI value
        if ($bmi < 18.5) {
            echo "<br>Underweight";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            echo "<br>Normal weight";
        } elseif ($bmi >= 25 && $bmi < 30) {
            echo "<br>Overweight";
        } else {
            echo "<br>Obese";
        }
    }
    ?>
</body>
</html>
