<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoá Danh Mục</title>
</head>
<body>
    <?php
        if ($ketqua) {
            echo 'Xoá danh mục thành công<a href="quanly.php">Quay lại</a>';
        } else {
            echo "Lỗi xoá danh mục";
        }
    ?>
</body>
</html>
