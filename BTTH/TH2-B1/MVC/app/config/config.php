<?php

define('APP_ROOT', dirname(__FILE__, 3)); // Địa chỉ máy chủ
define('DOMAIN','http://localhost/MVC/');

define('DB_HOST', 'localhost'); // Địa chỉ máy chủ
define('DB_NAME', 'tintuc');    // Tên cơ sở dữ liệu
define('DB_USER', 'root');      // Tên người dùng
define('DB_PASS', '');          // Mật khẩu (để trống nếu dùng XAMPP)


try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    // Thiết lập chế độ lỗi cho PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}