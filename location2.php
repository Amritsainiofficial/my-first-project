<!DOCTYPE html>
<html>
<head>
    <title>Live Location</title>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <h1>Get Live Location</h1>
    <button id="getLocation">Get My Location</button>
    <p id="location">Location: </p>
    

    <script>
        // Check if geolocation is available in the browser
        if ("geolocation" in navigator) {
            // Get the user's location when the button is clicked
            document.getElementById("getLocation").addEventListener("click", function() {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    var locationLink = "https://maps.google.com/?q=" + latitude + "," + longitude;

                    // Display the location on the page
                    document.getElementById("location").innerHTML = "Location: <a href='" + locationLink + "' target='_blank'>View on Google Maps</a>";

                    // Send the location to the server using AJAX
                    var xhr = new XMLHttpRequest();
                    var url = "save_location2.php";
                    var params = "latitude=" + latitude + "&longitude=" + longitude;
                    xhr.open("POST", url, true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.send(params);
                });
            });
        } else {
            alert("Geolocation is not available in this browser.");
        }
    </script>
</body>
</html>
