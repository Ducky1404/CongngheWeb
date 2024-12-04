<?php
require_once APP_ROOT . '/app/services/NewsService.php';

session_start();

<<<<<<< HEAD
// Kiểm tra nếu có tham số action trong URL
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
=======

// Kiểm tra nếu có tham số action trong URL
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Đăng xuất người dùng
>>>>>>> 8a159fd1e261f8221b645fb6636ca7eb87aa4c10
    session_start();
    session_unset(); // Hủy session
    session_destroy(); // Hủy session
    header('Location: ' . DOMAIN . '/index.php');  // Điều hướng về trang chủ
    exit;
}

<<<<<<< HEAD
// Kiểm tra nếu người dùng đã đăng nhập
$isLoggedIn = isset($_SESSION['user_id']);

// Kiểm tra role của người dùng nếu đã đăng nhập
if ($isLoggedIn && $_SESSION['role'] == 1) {
    echo '<p>Welcome Admin! <a href="' . DOMAIN . '/index.php?controller=admin&action=dashboard">Go to Dashboard</a></p>';
} elseif ($isLoggedIn && $_SESSION['role'] == 0) {
=======

// Kiểm tra nếu người dùng đã đăng nhập
$isLoggedIn = isset($_SESSION['user_id']); // Kiểm tra xem người dùng có session 'user_id' hay không

// Kiểm tra role của người dùng nếu đã đăng nhập
if ($isLoggedIn && $_SESSION['role'] == 1) {
    // Nếu là Admin, hiển thị thông tin đặc biệt cho Admin (ví dụ, đường dẫn đến dashboard)
    echo '<p>Welcome Admin! <a href="' . DOMAIN . '/index.php?controller=admin&action=dashboard">Go to Dashboard</a></p>';
} elseif ($isLoggedIn && $_SESSION['role'] == 0) {
    // Nếu là User, hiển thị thông tin cho người dùng bình thường
>>>>>>> 8a159fd1e261f8221b645fb6636ca7eb87aa4c10
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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Navbar styling */
        header {
            background-color: #ff6d07;
        }
        header .navbar-brand {
            color: #ffffff !important;
        }
        header .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        header .navbar-nav .nav-link:hover {
            color: #ffffff !important;
        }

        /* Card styling */
        .card {
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            background-color: #fff;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
        }

        /* Search form */
        .form-control {
            border-radius: 20px;
        }
        .btn-outline-success {
            border-radius: 20px;
        }

        /* Media list styling */
        .media {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .media:hover {
            background-color: #f1f1f1;
            transform: translateX(5px);
        }

        .media img {
            border-radius: 5px;
            object-fit: cover;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer p {
            margin: 0;
        }

        /* Responsive layout */
        @media (max-width: 768px) {
            .card-group {
                margin: 20px;
            }
        }
    </style>
</head>
<body>
<header>
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg bg-warning text-dark">
=======
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
>>>>>>> 8a159fd1e261f8221b645fb6636ca7eb87aa4c10
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
<<<<<<< HEAD
                        <a class="nav-link" href="#">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Academy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Study Abroad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?= DOMAIN . '/index.php' ?>" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search" required>
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <div class="d-flex ms-3">
                    <?php if ($isLoggedIn): ?>
                        <span class="me-2">Hello, <?= $_SESSION['username']; ?></span>
                        <a href="<?= DOMAIN . '/index.php?controller=home&action=logout'; ?>" class="btn btn-danger">Logout</a>
                    <?php else: ?>
=======
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
>>>>>>> 8a159fd1e261f8221b645fb6636ca7eb87aa4c10
                        <a href="<?= DOMAIN . '/index.php?controller=home&action=login'; ?>" class="btn btn-primary">Login</a>
                    <?php endif; ?>
                </div>
            </div>
<<<<<<< HEAD
=======
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
>>>>>>> 8a159fd1e261f8221b645fb6636ca7eb87aa4c10
        </div>
    </nav>
</header>

<!-- Slideshow Banner -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./image/images3.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="./image/banner2.png" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="./image/banner2.png" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<main>
    <h3 class="text-center mt-5 mb-4">Tin tức mới nhất</h3>

    <!-- Hiển thị kết quả tìm kiếm hoặc tất cả tin tức -->
    <div class="row row-cols-1 row-cols-md-1 g-4 container">
        <?php if ($searchQuery): ?>
            <h4>Kết quả tìm kiếm cho: <?= htmlspecialchars($searchQuery); ?></h4>
        <?php endif; ?>

        <?php foreach ($news as $item): ?>
            <div class="col">
                <div class="media">
                    <a href="<?= DOMAIN . '/news/details.php?id=' . $item->getId(); ?>" style="display: flex; width: 100%; text-decoration: none; color: inherit;">
                        <img class="mr-3" src="<?= $item->getImage(); ?>" alt="News Image" style="width: 100px; height: 100px; object-fit: cover; margin-right: 15px;">
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
