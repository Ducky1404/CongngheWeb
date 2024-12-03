<?php
require_once APP_ROOT . '/app/models/Category.php';

class CategoryService{
    public function connect(){
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
            // Thiết lập chế độ lỗi cho PDO
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }

    public function getAllCategory()
    {
        $conn = $this->connect();
        $stmt = $conn->query("SELECT * FROM categories");
        $stmt->execute();
        $categories = [];
        while ($row = $stmt->fetch()) {
            $categories[] = new Category($row['id'], $row['name']);
        }
        return $categories;
    }

    public function getCategoryById($id)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        $categoryData = $stmt->fetch();
        if ($categoryData) {
            return new Category($categoryData['id'], $categoryData['name']);
        }
        return null;
    }
}