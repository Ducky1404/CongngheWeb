<?php
require_once APP_ROOT . '/app/services/NewsService.php';
require_once APP_ROOT . '/app/services/CategoryService.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
    exit;
}

$newsService = new NewsService();
$categoryService = new CategoryService();
$categories = $categoryService->getAllCategory();

if (isset($_GET['id'])) {
    $news = $newsService->getNewsById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];

    $newsService->updateNews($id, $title, $content, $image, $category_id);

    header('Location: ' . DOMAIN . '/index.php?controller=admin&action=news');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit News</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $news->getId(); ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $news->getTitle(); ?>" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required><?= $news->getContent(); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" value="<?= $news->getImage(); ?>" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->getId(); ?>" <?= $category->getId() == $news->getCategoryId() ? 'selected' : ''; ?>><?= $category->getName(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update News</button>
    </form>
</div>
</body>
</html>