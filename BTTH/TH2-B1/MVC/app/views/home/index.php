<?php
require_once APP_ROOT . '/app/services/NewsService.php';

session_start();


// Kiểm tra nếu có tham số action trong URL
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Đăng xuất người dùng
    session_start();
    session_unset(); // Hủy session
    session_destroy(); // Hủy session
    header('Location: ' . DOMAIN . '/index.php');  // Điều hướng về trang chủ
    exit;
}


// Kiểm tra nếu người dùng đã đăng nhập
$isLoggedIn = isset($_SESSION['user_id']); // Kiểm tra xem người dùng có session 'user_id' hay không

// Kiểm tra role của người dùng nếu đã đăng nhập
if ($isLoggedIn && $_SESSION['role'] == 1) {
    // Nếu là Admin, hiển thị thông tin đặc biệt cho Admin (ví dụ, đường dẫn đến dashboard)
    echo '<p>Welcome Admin! <a href="' . DOMAIN . '/index.php?controller=admin&action=dashboard">Go to Dashboard</a></p>';
} elseif ($isLoggedIn && $_SESSION['role'] == 0) {
    // Nếu là User, hiển thị thông tin cho người dùng bình thường
    echo '<p>Welcome User! Enjoy the latest news.</p>';
}

// Kiểm tra nếu có tham số tìm kiếm trong URL
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

// Tạo đối tượng NewsService và lấy kết quả tìm kiếm
$newsService = new NewsService();
$news = ($searchQuery) ? $newsService->searchNews($searchQuery) : $newsService->getAllNews();
?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tlu News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= DOMAIN; ?>">Tlu News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= DOMAIN; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <!-- Thanh tìm kiếm -->
                <form class="d-flex" action="<?= DOMAIN . '/index.php' ?>" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search" required>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <!-- Nút đăng nhập/đăng xuất -->
                <div class="d-flex ms-3">
                    <?php if ($isLoggedIn): ?>
                        <!-- Nếu đã đăng nhập, hiển thị nút logout -->
                        <span class="me-2">Hello, <?= $_SESSION['username']; ?></span>
                        <a href="<?= DOMAIN . '/index.php?controller=home&action=logout'; ?>" class="btn btn-danger">Logout</a>
                    <?php else: ?>
                        <!-- Nếu chưa đăng nhập, hiển thị nút login -->
                        <a href="<?= DOMAIN . '/index.php?controller=home&action=login'; ?>" class="btn btn-primary">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <h3 class="text-center">Tin tức mới nhất</h3>

    <!-- Hiển thị kết quả tìm kiếm hoặc tất cả tin tức -->
    <div class="row row-cols-1 row-cols-md-1 g-4" style="margin:50px 100px 50px 100px ">
        <?php if ($searchQuery): ?>
            <h4>Kết quả tìm kiếm cho: <?= htmlspecialchars($searchQuery); ?></h4>
        <?php endif; ?>

        <?php foreach ($news as $item): ?>
            <ul class="list-unstyled" style="display: flex; align-items: center; padding: 0; margin: 0;">
                <li class="media" style="display: flex; align-items: center; width: 100%; padding: 10px; border-bottom: 1px solid #ccc;">
                    <a href="<?= DOMAIN . '/news/details.php?id=' . $item->getId(); ?>" style="display: flex; width: 100%; text-decoration: none; color: inherit;">
                        <img class="mr-3" src="<?= $item->getImage(); ?>" alt="Generic placeholder image" style="width: 80px; height: 80px; object-fit: cover; margin-right: 15px;">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><?= $item->getTitle(); ?></h5>
                            <p><?= substr($item->getContent(), 0, 100); ?>...</p>  <!-- Chỉ hiển thị đoạn trích -->
                        </div>
                    </a>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <div class="container">
        <div class="footer">
            <p>Made by Đức - <strong>Foreign Trade University</strong></p>
        </div>
    </div>
</footer>
</body>
</html>
