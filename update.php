<!DOCTYPE html>
<html>
<head>
    <title>Update Sensor Values</title>
</head>
<body>
    <h2>Update Sensor and Control Values</h2>
    <form method="get" action="update.php">
        <label>Temperature (°C):</label><br>
        <input type="text" name="temperature" required><br><br>

        <label>Humidity (%):</label><br>
        <input type="text" name="humidity" required><br><br>

        <label>Soil Moisture Level (%):</label><br>
        <input type="text" name="soil_moisture" required><br><br>

        <label>Air Pollution Level (%):</label><br>
        <input type="text" name="air_pollution" required><br><br>

        <label>Light Intensity (%):</label><br>
        <input type="text" name="light_intensity" required><br><br>

        <label>Motor Status:</label><br>
        <input type="text" name="motor_status" required><br><br>

        <label>Force Set Status:</label><br>
        <input type="text" name="force_set_status" required><br><br>

        <label>Camera Light Intensity:</label><br>
        <input type="text" name="camera_light_intensity" required><br><br>

        <label>Take Photo:</label><br>
        <input type="text" name="take_photo" required><br><br>

        <input type="submit" value="Update">
    </form>

    <?php
    if (
        isset($_GET['temperature']) &&
        isset($_GET['humidity']) &&
        isset($_GET['soil_moisture']) &&
        isset($_GET['air_pollution']) &&
        isset($_GET['light_intensity']) &&
        isset($_GET['motor_status']) &&
        isset($_GET['force_set_status'])&&
        isset($_GET['camera_light_intensity'])&&
        isset($_GET['take_photo'])
    ) {
        $data = [
            "temperature" => $_GET['temperature'],
            "humidity" => $_GET['humidity'],
            "soil_moisture" => $_GET['soil_moisture'],
            "air_pollution" => $_GET['air_pollution'],
            "light_intensity" => $_GET['light_intensity'],
            "motor_status" => $_GET['motor_status'],
            "force_set_status" => $_GET['force_set_status'],
            "camera_light_intensity" => $_GET["camera_light_intensity"],
            "take_photo" => $_GET["take_photo"]
        ];

        // Save to data.json
        file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

        echo "<p><strong>Values Updated!</strong></p>";
        echo "<p><a href='get.php'>View in get.php</a> or <a href='get.php?all'>Get JSON</a></p>";
    }
    ?>
</body>
</html>
