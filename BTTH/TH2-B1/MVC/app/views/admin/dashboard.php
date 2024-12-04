<?php
if (!class_exists('NewsService')) {
    require_once APP_ROOT . '/app/services/NewsService.php';
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
    exit;
}
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