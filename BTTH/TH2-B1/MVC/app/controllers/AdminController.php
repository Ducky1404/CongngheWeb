<?php

require_once APP_ROOT . '/app/services/NewsService.php';
require_once APP_ROOT . '/app/services/CategoryService.php';

class AdminController {
    private $newsService;
    private $categoryService;

    public function __construct() {
        $this->newsService = new NewsService();
        $this->categoryService = new CategoryService();
    }

    public function news() {
        session_start();

        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
            header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
            exit;
        }

        $newsList = $this->newsService->getAllNews();
        require_once APP_ROOT . '/app/views/admin/news/index.php';
    }

    public function edit($id) {
        session_start();

        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
            header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
            exit;
        }

        $news = $this->newsService->getNewsById($id);
        $categories = $this->categoryService->getAllCategory();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            $this->newsService->updateNews($id, $title, $content, $image, $category_id);

            header('Location: ' . DOMAIN . '/index.php?controller=admin&action=news');
            exit;
        }

        require_once APP_ROOT . '/app/views/admin/news/edit.php';
    }

    public function delete($id) {
        session_start();

        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
            header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
            exit;
        }

        $this->newsService->deleteNews($id);

        header('Location: ' . DOMAIN . '/index.php?controller=admin&action=news');
        exit;
    }

    public function add() {
        session_start();

        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
            header('Location: ' . DOMAIN . '/index.php?controller=home&action=login');
            exit;
        }

        $categories = $this->categoryService->getAllCategory();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            $this->newsService->addNews($title, $content, $image, $category_id);

            header('Location: ' . DOMAIN . '/index.php?controller=admin&action=news');
            exit;
        }

        require_once APP_ROOT . '/app/views/admin/news/add.php';
    }
}