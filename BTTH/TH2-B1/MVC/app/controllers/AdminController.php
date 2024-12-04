<?php
require_once APP_ROOT . '/app/services/NewsService.php';
require_once APP_ROOT . '/app/models/News.php';
require_once APP_ROOT . '/app/services/UserService.php';

class AdminController
{
    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userService = new UserService();
            $result = $userService->login($username, $password);
            if (isset($result['error'])) {
                echo $result['error'];
            }
        }
    }

    public function getAllNews()
    {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM news");
        $stmt->execute();
        $newsData = $stmt->fetchAll();
        $news = [];
        foreach ($newsData as $item) {
            $news[] = new News($item['id'], $item['title'], $item['content'], $item['image'], $item['created_at'], $item['category_id']);
        }
        return $news;
    }

    public function search()
    {
        if (isset($_GET['query'])) {
            $term = $_GET['query'];
            $newsService = new NewsService();
            $news = $newsService->searchNews($term);
            require_once APP_ROOT . '/app/views/home/index.php'; // Chuyển kết quả tìm kiếm vào home/index.php
        }
    }
}
?>