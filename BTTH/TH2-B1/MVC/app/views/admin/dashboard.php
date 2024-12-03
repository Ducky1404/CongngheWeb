<?php
// Kiểm tra xem người dùng có đăng nhập hay chưa
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
echo "Welcome to admin dashboard!";