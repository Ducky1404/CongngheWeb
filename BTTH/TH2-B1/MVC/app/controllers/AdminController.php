<?php
require_once APP_ROOT . '/app/services/NewsService.php';
require_once APP_ROOT . '/app/services/CategoryService.php';
require_once APP_ROOT . '/app/services/UserService.php';

class AdminController{
    private $newsService;
    private $categoryService;
    private $userService;

    public function __construct(){
        $this->newsService = new NewsService();
        $this->categoryService = new CategoryService();
        $this->userService = new UserService();
    }

    public function index(){
        $news = $this->newsService->getAllNews();
        include APP_ROOT . '/app/views/home/index.php';  // Đảm bảo đường dẫn chính xác
    }

//    public function create(){
//        $categories = $this->categoryService->getAllCategory();
//        include APP_ROOT . '/app/views/admin/create.php';
//    }

    public function store($title, $content, $categoryId){
        $this->newsService->addNews($title, $content, $categoryId);
        header('Location: /admin');
    }

//    public function edit($id){
//        $newsItem = $this->newsService->getNewsById($id);
//        $categories = $this->categoryService->getAllCategory();
//        include APP_ROOT . '/app/views/admin/edit.php';
//    }

//    public function update($id, $title, $content, $categoryId){
//        $this->newsService->updateNews($id, $title, $content, $categoryId);
//        header('Location: /admin');
//    }

    public function delete($id){
        $this->newsService->deleteNews($id);
        header('Location: /admin');
    }

//    public function users(){
//        $users = $this->userService->getAllUsers();
//        include APP_ROOT . '/app/views/admin/users.php';
//    }

//    public function showUser($id){
//        $user = $this->userService->getUserById($id);
//        include APP_ROOT . '/app/views/admin/showUser.php';
//    }

//    public function editUser($id){
//        $user = $this->userService->getUserById($id);
//        include APP_ROOT . '/app/views/admin/editUser.php';
//    }

//    public function updateUser($id, $name, $email, $password){
//        $this->userService->updateUser($id, $name, $email, $password);
//        header('Location: /admin/users');
//    }
}
?>