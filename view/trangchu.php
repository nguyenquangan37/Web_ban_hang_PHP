<?php require_once('header.php'); ?>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
		          <span><i class="fas fa-cube"></i>  Sản phẩm nổi bật</span>
		          <a class="d-flex align-items-center text-info" href="#">
		            Xem thêm <i class="fas fa-chevron-right"></i>
		          </a>
		        </h6>
                <!-- sản phẩm nổi bật -->
                <div class="card-deck mb-3 text-center">
                    <?php while($data = $listsanpham->fetch_assoc()){ ?>
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><span style="color: red"><?php echo $data['gia'] ?>.000 VNĐ</span> <small class="text-muted" style="text-decoration: line-through"></small></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 row justify-content-center">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- end sản phẩm nổi bật -->
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
		          <span><i class="fas fa-cube"></i> Nước ngọt</span>
		          <a class="d-flex align-items-center text-info" href="danhmuc.php?id=1">
                    Xem thêm <i class="fas fa-chevron-right"></i>
                  </a>
		        </h6>
                <div class="card-deck mb-3 text-center">
                    <?php while($data = $listNuocngot->fetch_assoc()){ ?>
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><span style="color: red"><?php echo $data['gia'] ?>.000 VNĐ</span> <small class="text-muted" style="text-decoration: line-through"></small></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 row justify-content-center">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
		          <span><i class="fas fa-cube"></i>  Trà,cà phê</span>
		          <a class="d-flex align-items-center text-info" href="danhmuc.php?id=2">
                    Xem thêm <i class="fas fa-chevron-right"></i>
                  </a>
		        </h6>
                <div class="card-deck mb-3 text-center">
                    <?php while($data = $listTra->fetch_assoc()){ ?>
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><span style="color: red"><?php echo $data['gia'] ?>.000 VNĐ</span> <small class="text-muted" style="text-decoration: line-through"></small></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 row justify-content-center">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <!-- end pkss -->
            </div>
<?php require_once('footer.php'); ?>