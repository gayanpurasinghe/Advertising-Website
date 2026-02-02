<!DOCTYPE html>
<html>
<?php require_once __DIR__ . '/../../config/config.php'; ?>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/admin/dashboard_view.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/layout/popup.css">
</head>

<body>

    <div class="sidebar">
        <h2>BuySel Admin</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="manage_ads.php">All Ads</a>
        <a href="users.php">Manage Users</a>
        <a href="reports.php">Reports</a>
        <a href="<?php echo URLROOT; ?>/index.php">Back to Site</a>
        <a href="javascript:void(0)" onclick="confirmLogout()">Logout</a>
    </div>

    <div class="main-content">
        <h1>Dashboard</h1>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Users</h3>
                <div class="value">
                    <?php echo $userCount ?? 0; ?>
                </div>
            </div>
            <div class="stat-card">
                <h3>Total Ads</h3>
                <div class="value">
                    <?php echo $totalAds ?? 0; ?>
                </div>
            </div>
            <div class="stat-card">
                <h3>Active Ads</h3>
                <div class="value">
                    <?php echo $adCount ?? 0; ?>
                </div>
            </div>
            <div class="stat-card">
                <h3>Pending Ads</h3>
                <div class="value">
                    <?php echo $pendingAds ?? 0; ?>
                </div>
            </div>
            <div class="stat-card">
                <h3>Pending Reports</h3>
                <div class="value">
                    <?php echo $reportCount ?? 0; ?>
                </div>
            </div>
        </div>

    </div>
    <script>
        window.URLROOT = "<?php echo URLROOT; ?>";
    </script>
    <script src="<?php echo URLROOT; ?>/assets/js/popup.js"></script>
    <script src="<?php echo URLROOT; ?>/assets/js/generic.js"></script>
    <script src="<?php echo URLROOT; ?>/assets/js/script.js"></script>

</body>

</html>