<?php
if (isset($_POST["latitude"]) && isset($_POST["longitude"])) {
    // Replace with your database connection information
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "form";

    // Create a database connection
    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get latitude and longitude
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Insert location data into the database
    $sql = "INSERT INTO locations (latitude, longitude) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("dd", $latitude, $longitude);

    if ($stmt->execute()) {
        echo "Location saved to the database successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid data.";
}
?>
