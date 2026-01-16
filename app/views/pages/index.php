<?php require APPROOT . '/views/layout/header.php'; ?>
<!--?php require APPROOT . '/views/layout/search_bar.php'; ?-->

<div class="content">
    <h2>Content</h2>
    <p>Welcome to BuySel.lk! Browse and find amazing deals on a variety of products.</p>

    <!-- Display Ads Section -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/ads/view_ads.css">

    <h2>Other Users' Advertisements</h2>

    <div class="ad-list">
        <?php if (empty($data['ads'])): ?>
            <p>No advertisements available.
                <?php if (!isset($_SESSION['user_id']))
                    echo "Please login to view ads."; ?>
            </p>
        <?php else: ?>
            <?php foreach ($data['ads'] as $ad): ?>
                <div class="ad-item">
                    <h3>
                        <?php echo htmlspecialchars($ad['title']); ?>
                    </h3>
                    <p>
                        <?php echo htmlspecialchars($ad['description']); ?>
                    </p>
                    <p><strong>Price:</strong> Rs:
                        <?php echo htmlspecialchars($ad['price']); ?>
                    </p>
                    <?php if (!empty($ad['image_path'])): ?>
                        <!-- Ensure image path is correct relative to public -->
                        <img src="<?php echo URLROOT; ?>/<?php echo htmlspecialchars($ad['image_path']); ?>" alt="Ad Image"
                            style="max-width: 200px;">
                    <?php endif; ?>
                    <p>Posted by:
                        <?php echo htmlspecialchars($ad['username']); ?> on
                        <?php echo htmlspecialchars($ad['created_at']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php require APPROOT . '/views/layout/footer.php'; ?>