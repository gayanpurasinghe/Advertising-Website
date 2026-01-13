<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <form method="POST" action="../../controllers/AuthController.php?action=login">
        <div class="login-container">
            <h2>Login</h2>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >

            <button type="submit">Login</button>
            <button type="button" onclick="window.location.href='register.php'">Register</button>
            <button type="reset">Clear</button>
        </div>
    </form>
</body>

</html>