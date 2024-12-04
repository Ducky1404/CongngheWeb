<?php
session_start();
require_once '../app/config/config.php';
require_once APP_ROOT . '/app/services/UserService.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Khởi tạo UserService và xử lý đăng nhập
    $userService = new UserService();
    $loginResult = $userService->login($username, $password);

    if ($loginResult === true) {
        // Đăng nhập thành công, lưu thông tin vào session
        $_SESSION['user_id'] = $loginResult['user_id']; // Giả sử login trả về user_id
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $loginResult['role']; // Lưu role vào session

        // Kiểm tra vai trò và điều hướng
        if ($_SESSION['role'] == 1) { // Admin
            header('Location: ' . DOMAIN . '/app/views/admin/dashboard.php');
        } else { // User
            header('Location: ' . DOMAIN . '/app/views/home/index.php');
        }
        exit; // Dừng lại sau khi điều hướng
    } else {
        // Lỗi đăng nhập, hiển thị thông báo lỗi
        $error = $loginResult['error'];
    }
}

?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Đăng Nhập</h2>
    <?php if (isset($errorMessage)): ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php endif; ?>

    <form action="<?= DOMAIN . '/index.php?controller=home&action=login'; ?>" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Tài Khoản</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
    </form>
</div>
</body>
</html>