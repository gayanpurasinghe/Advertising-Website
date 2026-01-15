<?php
define('APPROOT', dirname(__DIR__));
?>

<!DOCTYPE html>
<html>
<head>
    <title>BuySel.lk</title>


</head>
<body>

<?php require_once APPROOT . '/app/views/layout/header.php'; ?>

<div class="content">
    <h2>Content</h2>
    <p>Welcome to BuySel.lk! Browse and find amazing deals on a variety of products.</p>
    <?php require_once APPROOT . '/app/views/ads/view_ads.php'; ?>
</div>

<?php require_once APPROOT . '/app/views/layout/footer.php'; ?>

</body>
</html>
