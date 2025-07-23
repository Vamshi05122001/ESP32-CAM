<?php
$dataFile = "data.json";

if (!file_exists($dataFile)) {
    http_response_code(404);
    echo "No data found. Please submit values via update.php first.";
    exit;
}

$data = json_decode(file_get_contents($dataFile), true);

// If JSON requested
if (isset($_GET['all'])) {
    header("Content-Type: application/json");
    echo json_encode($data, JSON_PRETTY_PRINT);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sensor & Control Values</title>
</head>
<body>
    <h2>Stored Sensor and Control Values:</h2>
    <ul>
        <li>Temperature: <?php echo htmlspecialchars($data['temperature']); ?> °C</li>
        <li>Humidity: <?php echo htmlspecialchars($data['humidity']); ?> %</li>
        <li>Soil Moisture: <?php echo htmlspecialchars($data['soil_moisture']); ?></li>
        <li>Air Pollution: <?php echo htmlspecialchars($data['air_pollution']); ?> ppm</li>
        <li>Light Intensity: <?php echo htmlspecialchars($data['light_intensity']); ?> lux</li>
        <li>Motor Status: <?php echo htmlspecialchars($data['motor_status']); ?></li>
        <li>Force Set Status: <?php echo htmlspecialchars($data['force_set_status']); ?></li>
        <li>Camera Light Intensity: <?php echo htmlspecialchars($data['camera_light_intensity']); ?></li>
        <li>Take Photo: <?php echo htmlspecialchars($data['take_photo']); ?></li>
    </ul>
</body>
</html>