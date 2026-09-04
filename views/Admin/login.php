
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form  class="login-form" method="POST" action="../../controllers/loginControl.php>
        <div class="login">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter your email" required><br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" name="login_button">Login</button>
        </div>
    </form>
</body>
</html>