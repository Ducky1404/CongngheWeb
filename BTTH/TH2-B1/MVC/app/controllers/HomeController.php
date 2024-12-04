<?php
// Kiểm tra lớp NewsService đã tồn tại chưa
if (!class_exists('NewsService')) {
    require_once APP_ROOT . '/app/services/NewsService.php';
}
require_once APP_ROOT . '/app/services/UserService.php';  // Thêm UserService

class HomeController {
    public function index() {
        // Xử lý hiển thị trang chủ và lấy tất cả tin tức
        $newsService = new NewsService();
        $news = $newsService->getAllNews();
        require_once APP_ROOT . '/app/views/home/index.php'; // Đảm bảo đường dẫn đúng
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy thông tin đăng nhập từ form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Gọi dịch vụ người dùng để xử lý đăng nhập
            $userService = new UserService();
            $loginResult = $userService->login($username, $password);

            if (isset($loginResult['error'])) {
                // Nếu có lỗi đăng nhập, hiển thị thông báo lỗi
                $errorMessage = $loginResult['error'];
            } else {
                // Nếu đăng nhập thành công, kiểm tra vai trò của người dùng
                session_start();
                if ($_SESSION['role'] == 1) {
                    // Admin -> Điều hướng đến trang dashboard
                    header('Location: ' . DOMAIN . '/app/views/admin/dashboard.php');
                } else {
                    // User -> Điều hướng đến trang chủ
                    header('Location: ' . DOMAIN . '/home/index');
                }
                exit; // Dừng quá trình thực thi sau khi redirect
            }
        }

        // Hiển thị trang đăng nhập nếu chưa đăng nhập
        require_once APP_ROOT . '/app/views/admin/login.php';
    }

    public function logout() {
        // Gọi logout từ UserService
        $userService = new UserService();
        $userService->logout(); // Gọi phương thức logout trong UserService

        // Điều hướng về trang chủ sau khi đăng xuất
        header('Location: ' . DOMAIN . '/home/index');
        exit;
    }
    public function searchResults() {
        if (isset($_GET['query'])) {
            $term = $_GET['query'];
            $newsService = new NewsService();
            $news = $newsService->searchNews($term);
            require_once APP_ROOT . '/app/views/home/index.php'; // Hiển thị kết quả tìm kiếm trong trang home/index.php
        }
    }
}
?>
