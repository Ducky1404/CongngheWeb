<?php ob_start(); ?>
<h2>Sửa Sản Phẩm</h2>
<form method="post" action="index.php?action=edit&id=<?= $product['id'] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Giá</label>
        <input type="number" class="form-control" id="price" name="price" value="<?= $product['price'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="index.php" class="btn btn-secondary">Hủy</a>
</form>
<?php $content = ob_get_clean(); ?>
<?php require 'views/layout.php'; ?>
