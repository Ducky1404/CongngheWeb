<?php
require_once 'models/ProductModel.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function index() {
        $products = $this->model->getAll();
        require 'views/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->model->create($name, $price);
            header('Location: index.php');
            exit();
        }
        require 'views/create.php';
    }

    public function edit($id) {
        $product = $this->model->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->model->update($id, $name, $price);
            header('Location: index.php');
            exit();
        }
        require 'views/edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php');
        exit();
    }
}
