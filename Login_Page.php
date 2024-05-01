<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form class="registration-form" method="POST" action="Login.php">
        <h1>Login</h1>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>
</body>
</html>
