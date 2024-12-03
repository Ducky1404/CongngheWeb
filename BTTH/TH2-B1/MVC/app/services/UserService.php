<?php

require_once APP_ROOT . '/app/models/User.php';
class UserService{
    //B1: Ket noi Database
    public  function connect(){
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
            // Thiết lập chế độ lỗi cho PDO
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
    //B2: Thuc hien truy van
    public function login($username, $password)
    {
        // Kiểm tra tên người dùng
        $user = User::findByUsername($username);

        if ($user && password_verify($password, $user->getPassword())) {
            // Lưu thông tin người dùng vào session
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['role'] = $user->getRole();
            return true; // Đăng nhập thành công
        }
        return false; // Đăng nhập thất bại
    }

    // Đăng xuất
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit;
    }

}