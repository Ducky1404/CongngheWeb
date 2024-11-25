<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh sách hoa</title>
    <style>
        /* Body và cấu trúc tổng quan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #0056b3;
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        /* Form thêm hoa */
        form {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        form input,
        form textarea,
        form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form textarea {
            resize: none;
        }
        form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form button:hover {
            background-color: #0056b3;
        }

        /* Bảng danh sách hoa */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        table th,
        table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f8f9fa;
            color: #333;
        }
        table img {
            max-width: 80px;
            border-radius: 5px;
        }

        /* Các nút hành động */
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions form {
            display: inline-block;
        }
        .actions button {
            padding: 5px 10px;
            font-size: 0.9rem;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }
        .actions button.delete {
            background-color: #dc3545;
            color: white;
        }
        .actions button.delete:hover {
            background-color: #c82333;
        }
        .actions button.edit {
            background-color: #28a745;
            color: white;
        }
        .actions button.edit:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<?php
require 'function.php';
$flowers = getFlowers();

// Xử lý các hành động CRUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = 'img/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
        addFlower($name, $description, $image);
    }
    if (isset($_POST['delete'])) {
        deleteFlower($_POST['id']);
    }
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_FILES['image']['size'] > 0 ? 'images/' . basename($_FILES['image']['name']) : '';
        if ($image) move_uploaded_file($_FILES['image']['tmp_name'], $image);
        editFlower($id, $name, $description, $image);
    }
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh sách hoa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Quản trị danh sách hoa</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Tên hoa" required>
        <textarea name="description" placeholder="Mô tả" required></textarea>
        <input type="file" name="image" required>
        <button type="submit" name="add">Thêm hoa</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $index => $flower): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $flower['name'] ?></td>
                    <td><?= $flower['description'] ?></td>
                    <td><img src="<?= $flower['image'] ?>" width="100"></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $index ?>">
                            <button type="submit" name="delete">Xóa</button>
                        </form>
                        <form method="POST" enctype="multipart/form-data" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $index ?>">
                            <input type="text" name="name" placeholder="Tên mới" required>
                            <textarea name="description" placeholder="Mô tả mới" required></textarea>
                            <input type="file" name="image">
                            <button type="submit" name="edit">Sửa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>