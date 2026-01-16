<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/auth/login.css">
</head>

<body>
    <?php if ($error): ?>
        <div id="popupOverlay">
            <div id="popupBox">

                <?php if ($error === "invalid_credentials"): ?>
                    <h3>Login Failed</h3>
                    <p>Invalid username or password.</p>
                <?php elseif ($error === "empty_fields"): ?>
                    <h3>Missing Information</h3>
                    <p>Please fill in all fields.</p>
                <?php endif; ?>

                <button onclick="closePopup()">OK</button>
            </div>
        </div>
    <?php endif; ?>


    <form method="POST" action="<?php echo URLROOT; ?>/users/login">
        <div class="login-container">
            <div class="logo" align="center">
                <img src="<?php echo URLROOT; ?>/assets/images/BuySelLogo.png" alt="Logo" class="logo-image">
            </div>
            <h2>Login</h2>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button type="submit">Login</button>
            <!-- Assuming register is also refactored, otherwise pointing to view file if exists? -->
            <!-- For now let's point to Users/register if I were to make one, or keep it relative if not. -->
            <!-- Previous was: window.location.href='register.php' which implies sibling file. -->
            <!-- If we are at /users/login, 'register.php' is wrong path conceptually in MVC url. -->
            <!-- The users refactor implies /users/register. -->
            <!-- I haven't made register method yet in Users.php, but I should. For now let's leave as is or update if I do register. -->
            <!-- User didn't complain about register, but broken links are bad. -->
            <!-- I'll add register method to Users controller next step to be safe. -->
            <button type="button"
                onclick="window.location.href='<?php echo URLROOT; ?>/users/register'">Register</button>
            <button type="reset">Clear</button>
        </div>

    </form>


    <script>
        function closePopup() {
            document.getElementById("popupOverlay").style.display = "none";
        }
    </script>


</body>

</html>