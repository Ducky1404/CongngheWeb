<?php

require_once APP_ROOT . '/app/models/User.php'; // Đảm bảo bao gồm lớp User

class UserService {
    private $pdo;

    public function __construct() {
        // Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối cho phù hợp)
        $dsn = 'mysql:host=localhost;dbname=tintuc;charset=utf8';
        $username = 'root';  // Thay đổi nếu bạn dùng tài khoản khác
        $password = '';      // Thay đổi nếu bạn dùng mật khẩu
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Không thể kết nối đến cơ sở dữ liệu: " . $e->getMessage());
        }
    }

    // Phương thức tìm kiếm người dùng theo tên đăng nhập
    public function findByUsername($username) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return new User($user['id'], $user['username'], $user['password'], $user['role']);
        }

        return null;
    }

    // Phương thức xử lý đăng nhập
    public function login($username, $password) {
        if (empty($username) || empty($password)) {
            return ['error' => 'Vui lòng nhập đầy đủ thông tin.'];
        }

        $user = $this->findByUsername($username);
        if (!$user) {
            return ['error' => 'Tên đăng nhập không tồn tại.'];
        }

        // Kiểm tra mật khẩu
        if ($password === $user->getPassword()) {
            // Lưu thông tin người dùng vào session
            session_start();
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['role'] = $user->getRole(); // Lưu role từ cơ sở dữ liệu

            return true;
        }

        return ['error' => 'Sai mật khẩu.'];
    }


    // Đăng xuất
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . DOMAIN . 'app/views/admin/login.php');
        exit;
    }
}
?>
