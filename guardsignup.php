<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Guard Signup</title>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <div class="container">
        <div class="signup-form">
            <h1>Sign Up</h1>
            <form action="connect3.php" method="POST">
                <input type="text" name="GuardID" placeholder="GuardID" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="guardlogin.php">Log In</a></p>
        </div>
    </div>
</body>
</html>
