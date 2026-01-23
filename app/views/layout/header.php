<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/layout/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/layout/popup.css">
</head>

<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../../config/config.php';
    ?>
    <script>
        window.URLROOT = "<?php echo URLROOT; ?>";
    </script>
    <div class="head">
        <a href="<?php echo URLROOT; ?>/index.php" class="logo-section">
            <img src="<?php echo URLROOT; ?>/assets/images/BuySelLogo.png" alt="BuySel.lk" class="home-icon">
            <h1 class="brand-name">BuySel.lk</h1>
        </a>

        <div class="nav">
            <?php if (isset($_SESSION['username'])): ?>
                <span>Hi, <?php echo htmlspecialchars($_SESSION['username']); ?></span>

                <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1): ?>
                    <a href="<?php echo URLROOT; ?>/../app/views/admin/dashboard.php" class="btn-admin">Admin Panel</a>
                <?php endif; ?>

                <a href="<?php echo URLROOT; ?>/../app/views/ads/create_ad.php" class="btn-cta">Create Ad</a>
                <a href="javascript:void(0)" onclick="confirmLogout()">Logout</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/../app/views/auth/login.php">Login</a>
                <a href="<?php echo URLROOT; ?>/../app/views/auth/register.php" class="btn-cta">Register</a>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>