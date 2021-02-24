<?php
if ($p == "giohang") require "giohang.php";
elseif ($p=="dathang") require "dathang.php";
elseif ($p=="chitiet") require "chitiet.php";
elseif ($p=="search") require "ketquatimkiem.php";
else if ($p == "thanhtoan1") require "thanhtoan1.php";
else if ($p == "thanhtoan2") require "thanhtoan2.php";
else if ($p == "thanhtoan3") require "thanhtoan3.php";
else if ($p == "thanhtoan4") require "thanhtoan4.php";
else if ($p == "cat") require "sanphamtrongdm.php";
else { ?>
    <h2>Sản phẩm bán chạy</h2>
    <?php $listSP = $xe->SanPhamBanChay(5); ?>
    <?php require "SPkhuyenmai.php" ?>
    <div class="clear"></div>
    <h2>Sản phẩm bán mới</h2>
    <?php $listSP = $xe->SanPhamMoi(5); ?>
   
    <?php require "SPkhuyenmai.php" ?>
<?php } ?>