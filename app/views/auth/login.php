<?php
require_once __DIR__ . '/../../config/config.php';

$title = 'Login';
$extra_css = '<link rel="stylesheet" type="text/css" href="' . URLROOT . '/assets/css/auth/login.css">';
<body data-error="<?php echo htmlspecialchars($error ?? ''); ?>"
    data-success="<?php echo htmlspecialchars($success ?? ''); ?>">

require_once __DIR__ . '/../layout/header.php';
?>

<form method="POST" action="<?php echo URLROOT; ?>/../app/controllers/AuthController.php?action=login">
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
        <button type="button" onclick="window.location.href='register.php'">Register</button>
        <button type="reset">Clear</button>
    </div>
    <script src="<?php echo URLROOT; ?>/assets/js/popup.js"></script>

</form>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>