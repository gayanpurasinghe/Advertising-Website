<!DOCTYPE html>
<html>

<?php require_once __DIR__ . '/../../config/config.php'; ?>

<head>
    <title>View Ads</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/layout/footer.css">
</head>

<body>
    <div class="scroll-top">
        <a href="#top"><img src="<?php echo URLROOT; ?>/assets/images/Scroll Up.png" alt="Scroll to Top"
                class="up-arrow-icon"></a>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>BuySel.lk</h3>
                <p>The best marketplace to buy and sell anything in Sri Lanka. Connect with thousands of buyers and
                    sellers today.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="<?php echo URLROOT; ?>/index.php">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact Support</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: support@buysel.lk</p>
                <p>Phone: +94 11 234 5678</p>
                <p>Address: No 32, Galle Road, Colombo, Sri Lanka</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy;
                <?php echo date('Y'); ?> BuySel.lk. All rights reserved.
            </p>
        </div>
    </footer>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $error = $_SESSION['error'] ?? null;
    $success = $_SESSION['success'] ?? null;
    unset($_SESSION['error']);
    unset($_SESSION['success']);
    ?>
    <script>
        window.authConfig = {
            error: "<?php echo htmlspecialchars($error ?? ''); ?>",
            success: "<?php echo htmlspecialchars($success ?? ''); ?>"
        };
    </script>

    <script src="<?php echo URLROOT; ?>/assets/js/popup.js"></script>
    <script src="<?php echo URLROOT; ?>/assets/js/generic.js"></script>

</body>

</html>