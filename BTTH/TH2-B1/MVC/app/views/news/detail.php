<?php
require_once APP_ROOT . '/app/services/NewsService.php';
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $news->getTitle(); ?></title>
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
    <div class="container mt-5">
        <h1><?= $news->getTitle(); ?></h1>
        <img src="<?= $news->getImage(); ?>" alt="News Image" class="img-fluid">
        <p class="mt-3"><?= $news->getContent(); ?></p>
    </div>
</main>

<footer>
    <div class="container">
        <p>Made by Đức - <strong>Thuy Loi University</strong></p>
    </div>
</footer>
</body>
</html>