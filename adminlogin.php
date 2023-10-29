<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>adminlogin</title>
</head>
<body style = "background-image:url('bg.jpg'); background-size:cover;">
    <div class="container">
        <div class="login-form">
            <h1>Login</h1>
            <form action="connect8.php" method="POST">
                <input type="text" name="userid" placeholder="userid" required>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>