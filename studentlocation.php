<!DOCTYPE html>
<html>
<head>
    <title>Location on Google Maps</title>
    <link rel="stylesheet" type="text/css" href="styles8.css">
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <h1>Location on Google Maps</h1>

    <div class="map-container">
        <!-- Google Maps location will be displayed here -->
        <div id="map"></div>
    </div>

    <?php
    // Connect to your database and retrieve latitude and longitude
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "form";

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT latitude, longitude FROM locations"; // Adjust the SQL query as needed
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $latitude = $row["latitude"];
        $longitude = $row["longitude"];
    }
    $conn->close();
    ?>

    <?php
    if (isset($latitude) && isset($longitude)) {
        // Generate the Google Maps link using the retrieved latitude and longitude
        $mapLink = "https://maps.google.com/?q=" . $latitude . "," . $longitude;
    ?>
        <div class="map-link">
            <p>Location Link:</p>
            <a href="<?php echo $mapLink; ?>" target="_blank"><?php echo $mapLink; ?></a>
        </div>
    <?php
    }
    ?>
</body>
</html>
