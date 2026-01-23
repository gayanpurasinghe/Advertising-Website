<html>

<head>
    <title>Search Bar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/layout/search_bar.css">
</head>

<body>
    <div class="search-bar">
        <form method="GET" action="<?php echo URLROOT; ?>/index.php">
            <input type="text" name="query" placeholder="Search ads...">
            <button type="submit">Search</button>
        </form>
    </div>
</body>

</html>