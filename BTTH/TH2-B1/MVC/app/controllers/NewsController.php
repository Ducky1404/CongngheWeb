<?php

require_once APP_ROOT . '/app/services/NewsService.php';

class NewsController {
    private $newsService;
    public function index() {
        $news = News::getAll();
        include APP_ROOT . "/app/views/home/index.php";
    }

    public function detail($id) {
        $news = News::getById($id);
        include APP_ROOT. "/app/views/news/detail.php";
    }
    public function __construct() {
        $this->newsService = new NewsService();
    }

//    public function index() {
//        $news = $this->newsService->getAllNews();
//        // Render the view with the news data
//    }
//
//    public function show($id) {
//        $newsItem = $this->newsService->getNewsById($id);
//        // Render the view with the news item data
//    }
//
//    public function create() {
//        // Render the view to create a new news item
//    }
//
//    public function store($title, $content, $categoryId) {
//        $this->newsService->addNews($title, $content, $categoryId);
//        // Redirect to the news index page
//    }
//
//    public function edit($id) {
//        $newsItem = $this->newsService->getNewsById($id);
//        // Render the view to edit the news item
//    }
//
//    public function update($id, $title, $content, $categoryId) {
//        $this->newsService->updateNews($id, $title, $content, $categoryId);
//        // Redirect to the news index page
//    }
//
//    public function delete($id) {
//        $this->newsService->deleteNews($id);
//        // Redirect to the news index page
//    }
}