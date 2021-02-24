<?php

if (isset($_POST['up'])) {
    if($_FILES["hinhanh"]["name"]!=NULL)
        {
            if($_FILES["hinhanh"]["type"]=="image/jpeg"
            ||$_FILES["hinhanh"]["type"]=="image/png"
            ||$_FILES["hinhanh"]["type"]=="image/gif")
            {
                if($_FILES["hinhanh"]["size"]>1048576)
                {
                    echo "file quá nặng";
                }
                // kiem tra su ton tai cua file
                elseif (file_exists("" . $_FILES["hinhanh"]["name"])) 
                {
                    echo $_FILES["hinhanh"]["name"]." file da ton tai. ";
                }
            
                else{
                    $tensp = $_POST['TenSP'];
                    $Ngay = $_POST['Ngay'];   
                    $mota = $_POST['MoTa'];
                    $anhien = $_POST['AnHien'];
                    $gia = $_POST['Gia'];
                    $soluongtonkho = $_POST['SoLuongTonKho'];
                    $idCL = $_POST['idCL'];
                    $thumuc = '../../xemohinh/Upload/';
                    $name =$_FILES['hinhanh']['name'];
                    $tmp_name=$_FILES['hinhanh']['tmp_name'];
                    $size = $_FILES['hinhanh']['size']; 
                    move_uploaded_file($tmp_name, $thumuc.$name);
                    $qt->Xe_Them($tensp,$Ngay, $mota, $anhien,$gia, $soluongtonkho, $idCL,$name);
                    echo "upload thành công <br/>";
                    echo "<script>document.location='index.php?p=xe_ds';</script>";
                    exit();
                }
            }
            else {
            echo "file duoc chon khong hop le";
            }
        }
        else 
            {
            echo "vui long chon file";
            }
            }
?>


<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
        <div class="card">
            <div class="header">
                <h2>
                    Thêm Xe
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
                                    <input type="text" id="Ten" name="TenSP" class="form-control" placeholder="Nhập tên sản phẩm" required>
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
                                    <input type="text" id="Ten" name="MoTa" class="form-control" placeholder="Mô tả"  required>
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
                                    <input type="text" id="ThuTu" name="Gia" class="form-control" placeholder="Nhập Giá" required min="1" max="1000">
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
                                    <input type="text" id="SoLuongTonKho" name="SoLuongTonKho" class="form-control" placeholder="" required >
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
                                    <input type="radio" id="AnHien_1" name="AnHien" checked value="1"> <label for="AnHien_1">Hiện</label>
                                    <input type="radio" id="AnHien_0" name="AnHien" value="0">
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
                                    <?php $listCL= $qt->ListLoaiXe();?>
                                    <select  name="idCL" class="form-control"  >
                                        <option value="0">-- Chọn loại Xe --</option>
                                        <?php while ($r = $listCL->fetch_assoc()) { ?>
                                        <option value="<?=$r['idcl']?> "><?=$r['tencl']?></option>
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
                                    <input type="file" name="hinhanh" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" name="up" class="btn btn-primary m-t-15 waves-effect">THÊM </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
