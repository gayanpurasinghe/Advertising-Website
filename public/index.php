<?php
define('APPROOT', dirname(__DIR__));
require_once APPROOT . '/app/config/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>BuySel.lk</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/home/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/ads/view_ads.css">


</head>

<body>

    <?php require_once APPROOT . '/app/views/layout/header.php'; ?>
    <?php require_once APPROOT . '/app/views/home/home.php'; ?>
    <?php require_once APPROOT . '/app/views/layout/footer.php'; ?>
    <!--?php require_once APPROOT . '/app/views/layout/search_bar.php'; ?-->

</body>

</html>