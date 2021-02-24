<div id="menu">
  <ul>
    <?php if (isset($_SESSION['username']) == false) { ?>
      <li><a href="./login.php">Đăng Nhập</a></li>
      <li><a href="./register.php">Đăng ký</a></li>
    <?php
    } else { ?>
      <a> Chào 
        <?= $_SESSION['hoten'] ?>
      </a><br>
      <a href="thoat.php">Đăng xuất</a>&nbsp;
    <?php } ?>

    <li><a href="./index.php?p">Trang chủ </a></li>
    <li><a href="./index.php?p=loaixe_ds">Loại xe</a></li>
    <li><a href="./index.php?p=xe_ds">Sản phẩm</a></li>
    <li><a href="./index.php?p=donhang_ds">Đơn hàng</a></li>
    <li><a href="./index.php?p=user_ds">User</a></li>
    
  </ul>
</div>
<!--END #menu-->