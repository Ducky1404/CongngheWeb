<?php
class Category
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    //getters & setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public static function getALlCategory()
    {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM categories");
        $stmt->execute();
        $categories = [];
        while ($category = $stmt->fetch()) {
            $categories[] = new self($category['id'], $category['name']);
        }
        return $categories;
    }
}