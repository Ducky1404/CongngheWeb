<?php
require_once APP_ROOT . '/app/models/News.php';
$id = $_GET['id'];
$news = News::findById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];
    $news->update($title, $content, $image, $category_id);
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
</head>
<body>
    <h1>Edit News</h1>
    <form method="POST">
        <label>Title:</label><input type="text" name="title" value="<?= $news->getTitle(); ?>" required><br>
        <label>Content:</label><textarea name="content" required><?= $news->getContent(); ?></textarea><br>
        <label>Image URL:</label><input type="text" name="image" value="<?= $news->getImage(); ?>" required><br>
        <label>Category ID:</label><input type="number" name="category_id" value="<?= $news->getCategoryId(); ?>" required><br>
        <button type="submit">Update News</button>
    </form>
</body>
</html>
