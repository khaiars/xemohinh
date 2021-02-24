<div class="topnav">
  <?php $aa = $xe->ListDanhMucSP() ?>
  <a href="./index.php?p">Trang chủ </a></li>

  <?php while ($rowDM = $aa->fetch_assoc()) { ?>
    <a href="./index.php?p=cat&idCL=<?php echo $rowDM['idcl'] ?>">
      <?php echo $rowDM['tencl'] ?></a>
  <?php } ?>
  
  <?php if (isset($_SESSION['username']) == false) { ?>
    <a href="login.php"> Đăng nhập</a>
    <a href="register.php"> Đăng ký</a>
    <?php
    } else { ?>
      <a> Chào 
        <?= $_SESSION['hoten'] ?>
      </a>
      <a href="thoat.php">Đăng xuất</a>&nbsp;
    <?php } ?>
  <a href="./index.php?p=giohang">Giỏ hàng</a>
  <a href="./index.php?p=sanpham">san pham</a>
  
</div>
