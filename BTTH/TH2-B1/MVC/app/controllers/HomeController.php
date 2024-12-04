<?php
require_once APP_ROOT . '/app/services/NewsService.php';
require_once APP_ROOT . '/app/services/UserService.php';

class HomeController {
    public function index() {
        $newsService = new NewsService();
        $news = $newsService->getAllNews();
        require_once APP_ROOT . '/app/views/home/index.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userService = new UserService();
            $loginResult = $userService->login($username, $password);

            if (isset($loginResult['error'])) {
                $errorMessage = $loginResult['error'];
            } else {
                session_start();
                $_SESSION['user_id'] = $loginResult['user_id'];
                $_SESSION['role'] = $loginResult['role'];
                $_SESSION['username'] = $username;

                if ($_SESSION['role'] == 1) {
                    header('Location: ' . DOMAIN . '/index.php?controller=home&action=dashboard');
                } else {
                    header('Location: ' . DOMAIN . '/index.php?controller=home&action=index');
                }
                exit;
            }
        }

        require_once APP_ROOT . '/app/views/admin/login.php';
    }

    public function logout() {
        $userService = new UserService();
        $userService->logout();

        header('Location: ' . DOMAIN . '/index.php?controller=home&action=index');
        exit;
    }

    public function dashboard() {
        session_start();

        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
            header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
            exit;
        }

        require_once APP_ROOT . '/app/views/admin/dashboard.php';
    }

    public function searchResults() {
        if (isset($_GET['query'])) {
            $term = $_GET['query'];
            $newsService = new NewsService();
            $news = $newsService->searchNews($term);
            require_once APP_ROOT . '/app/views/home/index.php';
        }
    }
}
?>