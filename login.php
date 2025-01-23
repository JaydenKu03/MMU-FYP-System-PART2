<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCI FYP Login Page</title>
    <link rel="stylesheet" href="static/login.css">
</head>

<body>
    <div class="login-container">
        <img src="images/mmu_logo2.png" alt="logo" id="logo2">
        <br>
        <br>
        <h1>FCI FYP Login</h1>
        <form action="/login" method="POST">
            <div class="form-group">
                <label for="username">User ID</label> 
                <input type="text" id="username" name="username" placeholder="Enter your username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
            <br /><br>
            <p id="loginSignup">Don't have an account? <a href="student_register.php" id="SignUp">Sign up</a></p>
        </form>
    </div>
</body>

</html>