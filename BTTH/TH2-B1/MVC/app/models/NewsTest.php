<?php
require_once 'C:/xampp/htdocs/CongngheWeb/BTTH/TH2-B1/MVC/app/config/database.php'; // Kết nối cơ sở dữ liệu

class NewsTest {
    public static function getAllNews() {
        // Tạo đối tượng Database và lấy kết nối
        $db = new Database();
        $conn = $db->getConnection();

        // Truy vấn lấy tất cả tin tức
        $query = "SELECT * FROM news";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        // Lấy kết quả dưới dạng mảng đối tượng stdClass
        $newsList = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $newsList;
    }
}
