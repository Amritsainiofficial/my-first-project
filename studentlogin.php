<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Student Login</title>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <div class="container">
        <div class="login-form">
            <h1>Login</h1>
            <form action="connect4.php" method="POST">
                <input type="text" name="RegNum" placeholder="RegNum" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>
            <p>Don't have an account? <a href="studentsignup.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>