<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boys hostels</title>
    <style>
        /* Global styles */
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
        <h1>Choose your block :</h1>
        <button class="option-button" id="option1">BLOCK 1</button>
        <button class="option-button" id="option2">BLOCK 2</button>
        <button class="option-button" id="option3">BLOCK 3</button>
        <button class="option-button" id="option4">BLOCK 4</button>
        <button class="option-button" id="option5">BLOCK 5</button>
        <button class="option-button" id="option6">BLOCK 6</button>
    </div>

    <!-- Popup containers -->
    <div class="popup" id="popup1">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button1">Close</button>
            <h2> BLOCK 1</h2>
            <p>
                Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX
            </p>
        </div>
    </div>
    
    <div class="popup" id="popup2">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button2">Close</button>
            <h2>BLOCK 2</h2>
            <p> Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX</p>
        </div>
    </div>
    
    <div class="popup" id="popup3">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button3">Close</button>
            <h2>BLOCK 3</h2>
            <p> Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX.</p>
        </div>
    </div>
    
    <div class="popup" id="popup4">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button4">Close</button>
            <h2>BLOCK 4</h2>
            <p> Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX</p>
        </div>
    </div>
    
    <div class="popup" id="popup5">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button5">Close</button>
            <h2>BLOCK 5</h2>
            <p> Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX.</p>
        </div>
    </div>
    
    <div class="popup" id="popup6">
        <div class="popup-content">
            <button class="close-popup-button" id="close-popup-button6">Close</button>
            <h2>BLOCK 6</h2>
            <p> Supervisor Name :                    ph.no.: +91XXXXXXXXXX ||  warden Name :                                ph.no.: +91XXXXXXXXXX</p>
        </div>
    </div>

    <script>
        // JavaScript to handle the button clicks and popup displays
        for (let i = 1; i <= 6; i++) {
            const openPopupButton = document.getElementById(`option${i}`);
            const closePopupButton = document.getElementById(`close-popup-button${i}`);
            const popup = document.getElementById(`popup${i}`);

            openPopupButton.addEventListener('click', () => {
                popup.style.display = 'block';
            });

            closePopupButton.addEventListener('click', () => {
                popup.style.display = 'none';
            });
        }
    </script>
</body>
</html>
