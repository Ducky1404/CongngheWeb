<?php
require_once('../app/config/config.php');

// Lấy controller và action từ URL (nếu có)
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'HomeController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Tạo đường dẫn tới file controller và kiểm tra xem file có tồn tại không
$controllerFile = APP_ROOT . "/app/controllers/{$controllerName}.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $action)) {
            if ($id !== null) {
                $controller->{$action}($id);
            } else {
                $controller->{$action}();
            }
        } else {
            die("Action '{$action}' không tồn tại trong controller '{$controllerName}'!");
        }
    } else {
        die("Controller '{$controllerName}' không tồn tại!");
    }
} else {
    die("File controller '{$controllerFile}' không tồn tại!");
}
?>