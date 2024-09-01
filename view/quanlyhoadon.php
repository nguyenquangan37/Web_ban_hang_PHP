<?php require_once('./view/header_quanly.php') ?>
 <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php">Quản lý</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách hóa đơn</li>
      </ol>
    </nav>
</h6>
<!-- danh sach hoa don -->
<div class="row">
    <div class="col-12">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="align-middle text-center">Mã hóa đơn</th>
                    <th scope="col" class="align-middle text-center">Danh sách sản phẩm</th>
                    <th scope="col" class="align-middle text-center">Số lượng</th>
                    <th scope="col" class="align-middle text-center">Tổng tiền</th>
                    <th scope="col" class="align-middle text-center">Người đặt</th>
                    <th scope="col" class="align-middle text-center">Ngày đặt hàng</th>
                    <th scope="col" class="align-middle text-center">Tình trạng</th>
                    <th scope="col" class="align-middle text-center">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;while($hd = $listhoadon->fetch_assoc()){ ?>
                <tr>
                    <th scope="row" class="align-middle text-center"><?php echo $hd['id_hoadon'] ?></th>
                    <td class="align-middle">
                        <?php 
                        $tongtien = 0;
                        $mang_sanpham = explode('|', $hd['listidsanpham']); //Xử lý sản phẩm
                        foreach($mang_sanpham as $key=>$sp){ ?>
                            <li style="list-style: square;">
                                <a href="sanpham.php?id=<?php echo $sp ?>"><?php echo $this->model->getSanPham($sp)['ten'] ?></a> (<?php  ?>)
                            </li>
                        <?php } ?>
                    </td>
                    <td class="align-middle">
                        <?php 
                        $mang_soluong = explode('|', $hd['listsoluongsanpham']); //Xử lý số lượng
                        foreach($mang_soluong as $sl){ ?>
                            <li style="list-style: square;">
                                <?php echo $sl ?>
                            </li>
                        <?php } ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['tongtien'] ?>.000 VNĐ
                    </td>
                    <td class="align-middle">
                        <a href="thanhvien.php?id=<?php echo $hd['idthanhvien'] ?>"><?php echo $this->model->getThanhVienByID($hd['idthanhvien'])['hoten'] ?></a>
                    </td>
                    <td class="align-middle">
                        <?php echo date('d/m/Y',time('d/m/Y',$hd['ngaygiaohang'])) ?>
                    </td>
                    <td class="align-middle">
                        <?php if($hd['tinhtrang']==0) echo 'Chưa duyệt';if($hd['tinhtrang']==1) echo 'Đã duyệt';  ?>
                    </td>
                    <td class="align-middle">
                        <a href="quanly.php?task=duyethd&id=<?php echo $hd['id_hoadon'] ?>" class="btn btn-warning">Duyệt đơn</a>
                        <button class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- end danh sach hoa don -->
<?php require_once('./view/footer_quanly.php') ?>