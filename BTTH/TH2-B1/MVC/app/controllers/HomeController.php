<?php
require_once APP_ROOT . '/app/services/NewsService.php';

class HomeController{
    public function index(){
        $newsService = new NewsService();
        $news = $newsService->getAllNews();

        // Kiểm tra nếu không có tin tức nào
        if (!$news) {
            $errorMessage = 'Không có tin tức nào để hiển thị';
        }

        // Truyền dữ liệu vào view
        include APP_ROOT . '/app/views/home/index.php';
    }
}
?>
