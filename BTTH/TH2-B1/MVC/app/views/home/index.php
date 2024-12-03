<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tlu News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tlu News</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <!-- Thanh tìm kiếm -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <!-- Nút đăng nhập/đăng xuất -->
                    <div class="d-flex ms-3">
                        <?php if (isset($_SESSION['user'])): ?>
                            <!-- Nếu đã đăng nhập, hiển thị nút logout -->
                            <a href="" class="btn btn-danger">Logout</a>
                        <?php else: ?>
                            <!-- Nếu chưa đăng nhập, hiển thị nút login -->
                            <a href="<?= DOMAIN.'app/views/admin/login.php' ?>" class="btn btn-primary">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h3 class="text-center">Tin tức mới nhất</h3>
        <div class="row row-cols-1 row-cols-md-1 g-4" style="margin:50px 100px 50px 100px ">
            <?php
            // Assuming $news is defined and populated in HomeController
            foreach ($news as $item): ?>
                <ul class="list-unstyled" style="display: flex; align-items: center; padding: 0; margin: 0;">
                    <li class="media" style="display: flex; align-items: center; width: 100%; padding: 10px; border-bottom: 1px solid #ccc;">
                        <a href=""
                           style="display: flex; width: 100%; text-decoration: none; color: inherit;">
                            <img class="mr-3" src="<?= $item->getImage(); ?>" alt="Generic placeholder image" style="width: 80px; height: 80px; object-fit: cover; margin-right: 15px;">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><?= $item->getTitle(); ?></h5>
                                <p><?= $item->getContent(); ?></p>
                            </div>
                        </a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy; 2021 - Tlu News</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>