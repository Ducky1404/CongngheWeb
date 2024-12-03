<?php

class User{
    private $id;
    private $username;
    private $password;
    private $role;

    public function __construct($id, $username, $password, $role){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    //getters & setters
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public static function findByUsername($username)
    {
        // Kết nối cơ sở dữ liệu và tìm người dùng theo tên đăng nhập
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $userData = $stmt->fetch();

        if ($userData) {
            return new self($userData['id'], $userData['username'], $userData['password'], $userData['role']);
        }
        return null; // Không tìm thấy user
    }
}