<?php
$row = null;
$idSP = $_GET['idSP'];
settype($idSP, "int");
$kq = $qt->Xe_ChiTiet($idSP);
if ($kq) $row = $kq->fetch_assoc();
if (isset($_POST['up'])) {
    if ($_FILES["hinhanh"]["name"] != NULL) {
        if (
            $_FILES["hinhanh"]["type"] == "image/jpeg"
            || $_FILES["hinhanh"]["type"] == "image/png"
            || $_FILES["hinhanh"]["type"] == "image/gif"
        ) {
            if ($_FILES["hinhanh"]["size"] > 1048576) {
                echo "file quá nang";
            }
            // kiem tra su ton tai cua file
            elseif (file_exists("" . $_FILES["hinhanh"]["name"])) {
                echo $_FILES["hinhanh"]["name"] . " file da ton tai. ";
            } else {
                $tensp = $_POST['TenSP'];
                $mota = $_POST['MoTa'];
                $anhien = $_POST['AnHien'];
                $gia = $_POST['Gia'];
                $soluongtonkho = $_POST['SoLuongTonKho'];
                $idCL = $_POST['idCL'];
                $thumuc = '../../xemohinh/Upload/';
                $name = $_FILES['hinhanh']['name'];
                $tmp_name = $_FILES['hinhanh']['tmp_name'];
                $size = $_FILES['hinhanh']['size'];
                move_uploaded_file($tmp_name, $thumuc . $name);
                $qt->Xe_Sua($idSP,$Ngay, $tensp, $mota, $anhien, $gia, $soluongtonkho, $idCL, $name, $urlHinh);
                echo "upload thành công <br/>";
                echo "<script>document.location='index.php?p=xe_ds';</script>";
                exit();
            }
        } else {
            echo "file duoc chon khong hop le";
        }
    } else {
        echo "vui long chon file";
    }
}
?>


<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
        <div class="card">
            <div class="header">
                <h2>
                    Sửa
                </h2>

            </div>
            <div class="body">
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Ten">Tên Sản Phẩm</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="Ten" name="TenSP" class="form-control" placeholder="Nhập tên sản phẩm" required value="<?= $row['TenSP'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Ten">Mô tả</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="textarea" id="Ten" name="MoTa" class="form-control" placeholder="Mô tả" required value="<?= $row['Mota'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Gia">Giá</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="ThuTu" name="Gia" class="form-control" value="<?= $row['SoLuongTonKho'] ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Soluongtonkho">Số lượng tồn kho</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="ThuTu" name="SoLuongTonKho" class="form-control" value="<?= $row['SoLuongTonKho'] ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label>Ẩn hiện</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="radio" id="AnHien_1" name="AnHien" <?= ($row['AnHien'] == 1) ? "checked" : "" ?> value="1"> <label for="AnHien_1">Hiện</label>
                                    <input type="radio" id="AnHien_0" name="AnHien" <?= ($row['AnHien'] == 0) ? "checked" : "" ?> value="0">
                                    <label for="AnHien_0">Ẩn</label></div>
                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Ten">Loại Sản Phẩm</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <?php $listCL = $qt->ListLoaiXe(); ?>
                                    <select name="idCL" class="form-control">
                                        <option value="0">-- Chọn loại Xe --</option>
                                        <?php while ($r = $listCL->fetch_assoc()) { ?>
                                            <?php if ($r['idcl'] == $row['idCL']) { ?>
                                                <option value="<?= $r['idcl'] ?>" selected><?= $r['tencl'] ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $r['idcl'] ?>"><?= $r['tencl'] ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Ten">Hình Ảnh</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="hinhanh" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" name="up" class="btn btn-primary m-t-15 waves-effect">Sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>