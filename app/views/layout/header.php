<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/layout/header.css">
</head>

<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <div class="head">
        <div class="logo">
            <a href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT; ?>/assets/images/BuySelLogo.png" alt="Home"
                    class="home-icon"></a>

        </div>
        <div class="name">
            <a href="<?php echo URLROOT; ?>">
                <h1>BuySel.lk</h1>
            </a>
        </div>



        <div class="nav">
            <?php if (isset($_SESSION['username'])): ?>
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <?php endif; ?>
            <!--a href="..\..\views\users\view_profile.php">Profile</a-->
            <a href="<?php echo URLROOT; ?>/ads/create">Create Ad</a>
            <!--a href="..\..\views\ads\view_ads.php" class="active">View Ads</a-->
            <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
        </div>



    </div>
</body>

</html>