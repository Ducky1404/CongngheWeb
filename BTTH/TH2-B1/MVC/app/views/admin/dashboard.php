<?php
// Kiểm tra lớp NewsService đã tồn tại chưa
if (!class_exists('NewsService')) {
    require_once APP_ROOT . '/app/services/NewsService.php';
}

session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa và có phải là admin không
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    // Nếu chưa đăng nhập hoặc không phải admin, điều hướng về trang login
    header('Location: ' . DOMAIN . '/app/views/admin/login.php');
    exit; // Dừng thực thi mã sau khi điều hướng
}

// Nếu là admin, hiển thị trang dashboard
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h1>Welcome to the Dashboard, <?= $_SESSION['username']; ?>!</h1>

</body>
</html>
