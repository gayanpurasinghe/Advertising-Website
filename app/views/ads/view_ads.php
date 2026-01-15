<!DOCTYPE html>
<html>

<head>
    <title>View Ads</title>
    <link rel="stylesheet" type="text/css" href="..\..\..\public\assets\css\ads\view_ads.css">
</head>

<body>

    
    <h2>View Ads</h2>

    <div class="ad-list">
        <?php
        // Sample data for ads
        $ads = [
            ['title' => 'iPhone 12 for Sale', 'description' => 'A slightly used iPhone 12 in good condition.', 'price' => '$600'],
            ['title' => 'Mountain Bike', 'description' => 'A sturdy mountain bike suitable for all terrains.', 'price' => '$300'],
            ['title' => 'Gaming Laptop', 'description' => 'High-performance laptop for gaming and work.', 'price' => '$1200'],
        ];

        // Display each ad
        foreach ($ads as $ad) {
            echo '<div class="ad-item">';
            echo '<h3>' . htmlspecialchars($ad['title']) . '</h3>';
            echo '<p>' . htmlspecialchars($ad['description']) . '</p>';
            echo '<p class="price">' . htmlspecialchars($ad['price']) . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>