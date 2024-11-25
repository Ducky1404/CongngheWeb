<?php
$filename = "KTPM2.csv";

$accounts = [];

if (($handle = fopen($filename, "r")) !== FALSE) {
    $headers = fgetcsv($handle, 1000, ",");
    $headers = array_map('trim', $headers); // Xóa khoảng trắng thừa

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $data = array_map('trim', $data);
        $accounts[] = array_combine($headers, $data);
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Danh sách tài khoản</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Thành phố</th>
            <th>Email</th>
            <th>Khóa học</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($accounts as $account) {
            echo "<tr>";
            echo "<td>" . $account['username'] . "</td>";
            echo "<td>" . $account['password'] . "</td>";
            echo "<td>" . $account['lastname'] . "</td>";
            echo "<td>" . $account['firstname'] . "</td>";
            echo "<td>" . $account['city'] . "</td>";
            echo "<td>" . $account['email'] . "</td>";
            echo "<td>" . (!empty($account['course1']) ? $account['course1'] : "Không có") . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
