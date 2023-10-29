<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Student Signup</title>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <div class="container">
        <div class="signup-form">
            <h1>Sign Up</h1>
            <form action="connect2.php" method="POST">
                <input type="text" name="RegNum" placeholder="RegNum" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="studentlogin.php">Log In</a></p>
        </div>
    </div>
</body>
</html>
