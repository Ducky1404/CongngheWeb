<?php
$products = [
    ["id" => 1, "name" => "Laptop Dell", "price" => 15000],
    ["id" => 2, "name" => "Chuột Logitech", "price" => 500],
    ["id" => 3, "name" => "Bàn phím Corsair", "price" => 1000]
];

// Xử lý CRUD
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

session_start();
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = $products;
}
$products = $_SESSION['products'];

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_product = [
                "id" => count($products) + 1,
                "name" => $_POST['name'],
                "price" => (int)$_POST['price']
            ];
            $products[] = $new_product;
            $_SESSION['products'] = $products;
            header('Location: ?action=read');
            exit();
        }
        break;
    case 'update':
        if ($product_id > 0 && $_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($products as &$product) {
                if ($product['id'] === $product_id) {
                    $product['name'] = $_POST['name'];
                    $product['price'] = (int)$_POST['price'];
                }
            }
            $_SESSION['products'] = $products;
            header('Location: ?action=read');
            exit();
        }
        break;
    case 'delete':
        if ($product_id > 0) {
            foreach ($products as $key => $product) {
                if ($product['id'] === $product_id) {
                    unset($products[$key]);
                }
            }
            $_SESSION['products'] = array_values($products);
            header('Location: ?action=read');
            exit();
        }
        break;
    default:
        $action = 'read';
        break;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Thể loại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Tác giả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Bài viết</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <?php if ($action === 'read'): ?>
        <a href="?action=create" class="btn btn-success mb-3">Thêm Sản Phẩm</a>
        <table class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Hành Động</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="?action=update&id=<?= $product['id'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="?action=delete&id=<?= $product['id'] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif ($action === 'create'): ?>
        <h2>Thêm Sản Phẩm Mới</h2>
        <form method="post" action="?action=create">
            <div class="mb-3">
                <label for="name" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="?action=read" class="btn btn-secondary">Hủy</a>
        </form>
    <?php elseif ($action === 'update' && $product_id > 0): ?>
        <?php
        $product_to_update = null;
        foreach ($products as $product) {
            if ($product['id'] === $product_id) {
                $product_to_update = $product;
                break;
            }
        }
        ?>
        <?php if ($product_to_update): ?>
            <h2>Sửa Sản Phẩm</h2>
            <form method="post" action="?action=update&id=<?= $product_id ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $product_to_update['name'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $product_to_update['price'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="?action=read" class="btn btn-secondary">Hủy</a>
            </form>
        <?php endif; ?>
    <?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
