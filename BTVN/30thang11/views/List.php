<?php ob_start(); ?>
<a href="index.php?action=create" class="btn btn-success mb-3">Thêm Sản Phẩm</a>
<table class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Hành Động</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $product['id'] ?>" class="btn btn-warning">Sửa</a>
                <a href="index.php?action=delete&id=<?= $product['id'] ?>" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php require 'views/layout.php'; ?>
