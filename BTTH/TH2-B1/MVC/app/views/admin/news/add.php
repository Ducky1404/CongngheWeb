<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once APP_ROOT . '/app/models/News.php';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image']; // Lấy đường dẫn ảnh
    $category_id = $_POST['category_id'];
    News::create($title, $content, $image, $category_id);
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
</head>
<body>
    <h1>Add News</h1>
    <form method="POST">
        <label>Title:</label><input type="text" name="title" required><br>
        <label>Content:</label><textarea name="content" required></textarea><br>
        <label>Image URL:</label><input type="text" name="image" required><br>
        <label>Category ID:</label><input type="number" name="category_id" required><br>
        <button type="submit">Add News</button>
    </form>
</body>
</html>
