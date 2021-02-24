<div id="menu">
    <ul>
        <?php $aa = $xe->ListDanhMucSP() ?>
        <li><a href="./index.php?p">Trang chủ</a></li>
        <li><a href="#">Loại Xe</a>
            <ul class="sub-menu">
                <li> <?php while ($rowDM = $aa->fetch_assoc()) { ?>
                        <a href="./index.php?p=cat&idCL=<?php echo $rowDM['idcl'] ?>">
                            <?php echo $rowDM['tencl'] ?></a>
                    <?php } ?></li>

            </ul>
        </li>
        <?php if (isset($_SESSION['username']) == false) { ?>
            <li> <a href="login.php"> Đăng nhập</a></li>
            <li><a href="register.php"> Đăng ký</a></li>
        <?php
        } else { ?>
            <li> <a> Chào
                    <?= $_SESSION['hoten'] ?>
                </a></li>
            <li>
                <a href="thoat.php">Đăng xuất</a>
            </li>
        <?php } ?>
        <li><a href="./index.php?p=giohang">Giỏ hàng</a></li>
    </ul>
</div>