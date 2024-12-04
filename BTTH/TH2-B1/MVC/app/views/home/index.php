<?php
require_once APP_ROOT . '/app/services/NewsService.php';
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;

// Xử lý tìm kiếm
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';
$newsService = new NewsService();
$news = ($searchQuery) ? $newsService->searchNews($searchQuery) : $newsService->getAllNews();
?>

<!-- Nội dung giao diện trang chủ -->
<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tlu News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-warning text-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= DOMAIN; ?>">Tlu News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= DOMAIN; ?>">Home</a></li>
                    <!-- Thêm các mục menu khác ở đây -->
                </ul>
                <form class="d-flex" action="<?= DOMAIN . '/index.php' ?>" method="GET">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search" required>
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <div class="d-flex ms-3">
                    <?php if ($isLoggedIn): ?>
                        <span class="me-2">Hello, <?= $_SESSION['username']; ?></span>
                        <a href="<?= DOMAIN . '/index.php?controller=home&action=logout'; ?>" class="btn btn-danger">Logout</a>
                    <?php else: ?>
                        <a href="<?= DOMAIN . '/index.php?controller=home&action=login'; ?>" class="btn btn-primary">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <h3 class="text-center mt-5 mb-4">Tin tức mới nhất</h3>
    <div class="row row-cols-1 row-cols-md-1 g-4 container">
        <?php if ($searchQuery): ?>
            <h4>Kết quả tìm kiếm cho: <?= htmlspecialchars($searchQuery); ?></h4>
        <?php endif; ?>

        <?php foreach ($news as $item): ?>
            <div class="col">
                <div class="media">
                    <a href="<?= DOMAIN . '/news/details.php?id=' . $item->getId(); ?>" style="display: flex; width: 100%; text-decoration: none;">
                        <img class="mr-3" src="<?= $item->getImage(); ?>" alt="News Image" style="width: 100px; height: 100px;">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><?= $item->getTitle(); ?></h5>
                            <p><?= substr($item->getContent(), 0, 100); ?>...</p>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <div class="container">
        <p>Made by Đức - <strong>Thuy Loi University</strong></p>
    </div>
</footer>
</body>
</html>