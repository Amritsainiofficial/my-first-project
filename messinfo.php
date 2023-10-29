<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mess information</title>
    <style>
        /* Style for the main page */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        /* Style for the buttons */
        .option-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 10px;
        }

        /* Style for the popup */
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

        /* Close button for the popup */
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
        <h1>Contact Your Mess</h1>
        <button class="option-button" id="option1">CRCL</button>
        <button class="option-button" id="option2">MAYURI</button>
        <button class="option-button" id="option3">AB</button>
    </div>

    <!-- Popup -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button">Close</button>
            <div id="popup-content">
                <!-- Content for the popup will be dynamically added here -->
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle the button clicks and popup display
        const optionButtons = document.querySelectorAll('.option-button');
        const popup = document.getElementById('popup');
        const closePopupButton = document.getElementById('close-popup-button');
        const popupContent = document.getElementById('popup-content');

        optionButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                // Set different content for each option
                let content = '';
                if (index === 0) {
                    content = 'Get in contact with CRCL : +9199XXXXXX99 ';
                } else if (index === 1) {
                    content = 'Get in contact with MAYURI : +9199XXXXXX99  ';
                } else if (index === 2) {
                    content = 'Get in contact with AB : +9199XXXXXX99 ';
                }

                popupContent.innerHTML = content;
                popup.style.display = 'block';
            });
        });

        closePopupButton.addEventListener('click', () => {
            popup.style.display = 'none';
        });
    </script>
</body>
</html>
