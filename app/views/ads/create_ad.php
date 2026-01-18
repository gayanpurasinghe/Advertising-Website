<html>

<head>
    <title>Create Ad</title>

    <head>
        <title>Create Ad</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/ads/create_ad.css">
    </head>

<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../../config/config.php';
    ?>

    <div class="create-ad-container">
        <a href="<?php echo URLROOT; ?>/index.php" class="close-btn">&times;</a>
        <h2>Create a New Advertisement</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <p style="color: red;">
                <?php
                echo htmlspecialchars($_SESSION['error']);
                unset($_SESSION['error']);
                ?>
            </p>
        <?php endif; ?>

        <form method="POST" action="<?php echo URLROOT; ?>/../app/controllers/AdController.php?action=create"
            enctype="multipart/form-data">
            <label for="title">Advertisement Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit">Create Ad</button>
            <button type="reset">Clear</button>
        </form>
    </div>

    <div class="popup-overlay" id="sucessModel" style="display: none;">
        <div class="popup-content">
            <span class="close-btn" id="closeBtn" onclick="closePopup()">&times;</span>
            <h2>Advertisement Created Successfully!</h2>
            <p id="popupMessage">Your advertisement has been created and is pending approval.</p>
            <a href="<?php echo URLROOT; ?>/index.php" class="home-link">Go to Home</a>
        </div>
    </div>

    <script src="<?php echo URLROOT; ?>/assets/js/popup.js"></script>

    <?php if (isset($_SESSION['success'])): ?>
        <script>
            showPopup("<?php echo $_SESSION['success']; ?>");
        </script>
        <?php
        unset($_SESSION['success']);
        ?>
    <?php endif; ?>

</body>

</html>