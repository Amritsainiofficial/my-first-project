<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>girl hostel</title>
    <style>
        /* Styles for the main page */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        /* Styles for the buttons */
        .popup-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 10px;
        }

        /* Styles for the popups */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .popup-content {
            background-color: #fff;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
        }

        /* Style for the close button within the popups */
        .close-popup-button {
            background-color: #ccc;
            color: #333;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <div class="container">
        <h1>Choose your block :</h1>
        <button class="popup-button" id="popup-button-1">BLOCK 1</button>
        <button class="popup-button" id="popup-button-2">BLOCK 2</button>
    </div>

    <!-- First Popup -->
    <div class="popup" id="popup-1">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button-1">Close</button>
            <h2>BLOCK 1</h2>
            <p>Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX</p>
        </div>
    </div>

    <!-- Second Popup -->
    <div class="popup" id="popup-2">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button-2">Close</button>
            <h2>BLOCK 2</h2>
            <p>Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX</p>
        </div>
    </div>

    <script>
        // JavaScript to handle the button clicks and popup display
        function togglePopup(popupId) {
            const popup = document.getElementById(popupId);
            popup.style.display = popup.style.display === "block" ? "none" : "block";
        }

        document.getElementById('popup-button-1').addEventListener('click', () => togglePopup('popup-1'));
        document.getElementById('popup-button-2').addEventListener('click', () => togglePopup('popup-2'));
        document.getElementById('close-popup-button-1').addEventListener('click', () => togglePopup('popup-1'));
        document.getElementById('close-popup-button-2').addEventListener('click', () => togglePopup('popup-2'));
    </script>
</body>
</html>
