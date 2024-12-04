<?php
class ProductModel {
    private $products;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [
                ["id" => 1, "name" => "Laptop Dell", "price" => 15000],
                ["id" => 2, "name" => "Chuột Logitech", "price" => 500],
                ["id" => 3, "name" => "Bàn phím Corsair", "price" => 1000],
            ];
        }
        $this->products = $_SESSION['products'];
    }

    public function getAll() {
        return $this->products;
    }

    public function getById($id) {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }

    public function create($name, $price) {
        $newProduct = [
            "id" => count($this->products) + 1,
            "name" => $name,
            "price" => $price
        ];
        $this->products[] = $newProduct;
        $_SESSION['products'] = $this->products;
    }

    public function update($id, $name, $price) {
        foreach ($this->products as &$product) {
            if ($product['id'] == $id) {
                $product['name'] = $name;
                $product['price'] = $price;
            }
        }
        $_SESSION['products'] = $this->products;
    }

    public function delete($id) {
        foreach ($this->products as $key => $product) {
            if ($product['id'] == $id) {
                unset($this->products[$key]);
            }
        }
        $this->products = array_values($this->products);
        $_SESSION['products'] = $this->products;
    }
}
