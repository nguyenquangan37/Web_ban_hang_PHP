<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website bán đồ uống</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            margin-top: 56px;
            font-family: Helvetica Neue, sans-serif;
        }
        
        .sidebar-sticky {
            z-index: 0 !important;
            margin-top:56px;
            height: 100%;
        }
    </style>
</head>
<body>
    <?php require_once('./view/navbar.php') ?>
    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar-sticky fixed-top px-1 col-2 border-right">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1  text-info">
                      <span><i class="fas fa-plus-circle"></i> Danh mục sản phẩm</span>
                      
                    </h6>
                    <ul class="nav flex-column">
                        <?php while($data = $listdanhmuc->fetch_assoc()){ ?>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="danhmuc.php?id=<?php echo $data['id_danhmuc'] ?>">
                                <i class="fas fa-angle-right"></i> <?php echo $data['ten'] ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-info">
          <span><i class="fas fa-plus-circle"></i> Website</span>
        </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fas fa-angle-right"></i> Đổi trả hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fas fa-angle-right"></i> Tin tức
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 bg-light">