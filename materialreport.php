<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>material Report</title>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <div class="container">
        <div class="signup-form">
            <h1>material Report</h1>
            <form action="connect7.php" method="POST">
                <input type="text" name="name" placeholder="name" required>
                <input type="about" name="about" placeholder="about" required>
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
                <button type="submit">Report</button>
            </form>
        </div>
    </div>
</body>
</html>
