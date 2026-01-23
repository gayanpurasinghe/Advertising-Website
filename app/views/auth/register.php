<?php
session_start();
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/auth/register.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/layout/popup.css">
</head>

<body>

    <form method="POST" action="<?php echo URLROOT; ?>/../app/controllers/AuthController.php?action=register">
        <div class="register-container">
            <div class="logo" align="center">
                <img src="<?php echo URLROOT; ?>/assets/images/BuySelLogo.png" alt="Logo" class="logo-image">
            </div>
            <h2>Register</h2>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
            <button type="button" onclick="window.location.href='login.php'">Login</button>
            <button type="reset">Clear</button>
        </div>
    </form>

    <script>
        window.authConfig = {
            error: "<?php echo htmlspecialchars($error ?? ''); ?>",
            success: null
        };
        
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                showPopup("Password Mismatch", "Passwords do not match.", "error");
            }
        });
    </script>
    <script src="<?php echo URLROOT; ?>/assets/js/popup.js"></script>
</body>

</html>