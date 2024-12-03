<?php
require_once APP_ROOT . '/app/services/NewsService.php';

class HomeController{
    public function index(){
        $newsService = new NewsService();
        $news = $newsService->getAllNews();
        include APP_ROOT . '/app/views/home/index.php';
    }
}