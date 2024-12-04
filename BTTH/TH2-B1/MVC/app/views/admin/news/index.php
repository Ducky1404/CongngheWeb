<?php
require_once APP_ROOT . '/app/services/NewsService.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
    exit;
}

$newsService = new NewsService();
$newsList = $newsService->getAllNews();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Manage News</h2>
    <a href="<?= DOMAIN . '/index.php?controller=admin&action=add'; ?>" class="btn btn-primary mb-3">Add News</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newsList as $news): ?>
                <tr>
                    <td><?= $news->getId(); ?></td>
                    <td><?= $news->getTitle(); ?></td>
                    <td><?= substr($news->getContent(), 0, 100); ?>...</td>
                    <td><img src="<?= $news->getImage(); ?>" width="50" alt="Image"></td>
                    <td>
                        <a href="<?= DOMAIN . '/index.php?controller=admin&action=edit&id=' . $news->getId(); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= DOMAIN . '/index.php?controller=admin&action=delete&id=' . $news->getId(); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>