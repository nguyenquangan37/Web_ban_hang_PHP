<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $sanpham['ten'] ?> - Web đồ uống</title>
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
            <div class="col-md-10">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success" style="border-bottom: 1px dashed #ccc">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-success"><i class="fas fa-home"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="danhmuc.php?id=<?php echo $danhmuc['id_danhmuc'] ?>" class="text-success"><?php echo $danhmuc['ten'] ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $sanpham['ten'] ?></li>
                      </ol>
                    </nav>
                </h6>
                <!-- pk noi bat -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $sanpham['anhdaidien'] ?>" style="max-width: 100%;border: 1px dashed #ccc;" alt="<?php echo $sanpham['ten'] ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="product-title py-1">
                            <h1 class="h3 text-success"><?php echo $sanpham['ten'] ?></h1>
                        </div>
                        <div class="product-price py-1">
                            <span class="h4 text-danger"><?php echo $sanpham['gia'] ?>.000 VNĐ</span> <span style="text-decoration: line-through;"></span>
                        </div>
                        <form action="sanpham.php?task=addtocart" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sanpham['id_sanpham'] ?>">
                        <div class="product-soluong py-1">
                            <span class="h6">Số lượng :</span>
                            <input type="number" value="1" min="1" max="100" class="form-control" style="display: inline;width: 4em;" name="soluong">
                        </div>
                        <div class="py-1">
                            <?php if(isset($_SESSION['user_data'])){ ?>
                            <button class="btn btn-outline-success"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</button>
                            </form>
                            <button type="submit" class="btn btn-success">Đặt mua</button>
                            <?php } else { ?>
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Đặt mua</button>
                            <?php } ?>
                        </div>
                        <div class="py-1">
                            <h6>Thông tin lưu ý :</h6>
                            <p>Hoàn tiền 100% nếu chất lượng sản phẩm không như cam kết</p>
                            <p>Phản hồi chất lượng dịch vụ: 0938.284.482</p>
                            <p>Hotline: 1900.77.99.49 | Hoạt động từ 8h30 đến 18h00 (T2-T7)</p>
                        </div>
                    </div>
                </div>
                <!-- tab -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-success" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả sản phẩm</a>
                        <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bình luận</a>
                        <a class="nav-item nav-link text-success" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sản phẩm liên quan</a>
                    </div>
                </nav>
                <div class="tab-content border border-top-0 p-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php echo $sanpham['mota'] ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                </div>
                <!-- endtab -->

            </div>
<?php require_once('./view/footer.php') ?>