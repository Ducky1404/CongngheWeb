<?php

require_once APP_ROOT . '/app/services/NewsService.php';

class NewsController {
    private $newsService;

    public function __construct() {
        $this->newsService = new NewsService();
    }

    public function index() {
        $news = $this->newsService->getAllNews();
        include APP_ROOT . "/app/views/home/index.php";
    }

    public function detail($id) {
        $news = $this->newsService->getNewsById($id);
        include APP_ROOT . "/app/views/news/detail.php";
    }
}
?>