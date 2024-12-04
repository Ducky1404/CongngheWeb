<?php
require_once APP_ROOT . '/app/models/User.php';

class UserService {
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=tintuc;charset=utf8';
        $username = 'root';
        $password = '';
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Cannot connect to the database: " . $e->getMessage());
        }
    }

    public function findByUsername($username) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return new User($user['id'], $user['username'], $user['password'], $user['role']);
        }

        return null;
    }

    public function login($username, $password) {
        if (empty($username) || empty($password)) {
            return ['error' => 'Please enter all information.'];
        }

        $user = $this->findByUsername($username);
        if (!$user) {
            return ['error' => 'Username does not exist.'];
        }

        if ($password === $user->getPassword()) {
            return [
                'user_id' => $user->getId(),
                'username' => $user->getUsername(),
                'role' => $user->getRole()
            ];
        }

        return ['error' => 'Incorrect password.'];
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }
}
?>