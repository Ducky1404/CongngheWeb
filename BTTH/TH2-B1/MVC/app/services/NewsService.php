<?php
require_once APP_ROOT . '/app/models/News.php';

class NewsService
{
    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
            // Thiết lập chế độ lỗi cho PDO
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
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

    public function getNewsById($id)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        $newsData = $stmt->fetch();
        if ($newsData) {
            return new News($newsData['id'], $newsData['title'], $newsData['content'], $newsData['image'], $newsData['created_at'], $newsData['category_id']);
        }
        return null;
    }


}