<?php
session_start();
$error = $_SESSION['error'] ?? null;
$success = $_SESSION['success'] ?? null;
unset($_SESSION['error']);
unset($_SESSION['success']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/dse/CW-MyGit/Advertising-Website/public/assets/css/auth/login.css">
    <link rel="stylesheet" type="text/css" href="/dse/CW-MyGit/Advertising-Website/public/assets/css/layout/popup.css">
</head>

<body>

    <form method="POST" action="/dse/CW-MyGit/Advertising-Website/app/controllers/AuthController.php?action=login">
        <div class="login-container">
            <div class="logo" align="center">
                <img src="/dse/CW-MyGit/Advertising-Website/public/assets/images/BuySelLogo.png" alt="Logo"
                    class="logo-image">
            </div>
            <h2>Login</h2>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button type="submit">Login</button>
            <button type="button" onclick="window.location.href='register.php'">Register</button>
            <button type="reset">Clear</button>
        </div>

    </form>


    <script>
        window.authConfig = {
            error: "<?php echo htmlspecialchars($error ?? ''); ?>",
            success: "<?php echo htmlspecialchars($success ?? ''); ?>"
        };
    </script>
    <script src="/dse/CW-MyGit/Advertising-Website/public/assets/js/popup.js"></script>

</body>

</html>