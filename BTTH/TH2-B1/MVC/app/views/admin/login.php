<?php
// login.php
require_once '../../config/config.php';
require_once APP_ROOT . '/app/services/UserService.php';
session_start();

// Xử lý đăng nhập khi form được submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userService = new UserService();
    $loginResult = $userService->login($username, $password);

    // Nếu đăng nhập không thành công
    if (isset($loginResult['error'])) {
        $errorMessage = $loginResult['error'];
    } else {
        // Kiểm tra vai trò của người dùng (1 cho admin, 0 cho user)
        if ($_SESSION['role'] == 1) {
            // Nếu là admin, chuyển hướng đến trang dashboard
            header('Location: ' . DOMAIN . 'app/views/admin/dashboard.php');
        } else {
            if ($_SESSION['role'] == 0) {
                // Nếu là user, chuyển hướng đến trang chính
                header('Location: ' . DOMAIN . 'MVC/public/');
            }
        }
        exit;
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tlu News - Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="login.php" method="POST" class="bg-white p-5 rounded shadow" style="max-width: 400px; width: 100%;">

        <!-- Hiển thị lỗi nếu có -->
        <?php if (isset($errorMessage)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <!-- Tên đăng nhập -->
        <div class="form-outline mb-4">
            <input type="text" name="username" id="form2Example1" class="form-control" required />
            <label class="form-label" for="form2Example1">Tên đăng nhập</label>
        </div>

        <!-- Mật khẩu -->
        <div class="form-outline mb-4">
            <input type="password" name="password" id="form2Example2" class="form-control" required />
            <label class="form-label" for="form2Example2">Mật khẩu</label>
        </div>

        <!-- 2 cột cho checkbox và quên mật khẩu -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox nhớ tôi -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked/>
                    <label class="form-check-label" for="form2Example31"> Nhớ tôi </label>
                </div>
            </div>

            <div class="col">
                <!-- Liên kết quên mật khẩu -->
                <a href="#">Quên mật khẩu?</a>
            </div>
        </div>

        <!-- Nút đăng nhập -->
        <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Đăng nhập</button>

        <!-- Liên kết đăng ký -->
        <div class="text-center">
            <p>Chưa có tài khoản? <a href="#">Đăng ký</a></p>
        </div>
    </form>
</div>
</body>
</html>
