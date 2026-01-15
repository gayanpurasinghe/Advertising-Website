<html>
    <head>
        <title>Create Ad</title>
        <link rel="stylesheet" type="text/css" href="\dse\C-W\Advertising-Website\public\assets\css\ads\create_ad.css">
    </head>
    <body>
        

        <div class="create-ad-container">
            <h2>Create a New Advertisment</h2>
        <form method="POST" action="\dse\C-W\Advertising-Website\app\controllers\AdController.php?action=create" enctype="multipart/form-data">
            <label for="title">Advertisment Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit">Create Ad</button>
        </form>
        </div>
    </body>

</html>