<?php
$row=null;
$idCL = $_GET['idCL']; settype($idCL,"int");
$kq = $qt->LoaiXe_ChiTiet($idCL);
if ($kq) $row = $kq->fetch_assoc();
if (isset($_POST['TenCL'])) {
    $TenCL = $_POST['TenCL'];
    $ThuTu = $_POST['ThuTu'];
    $AnHien = $_POST['AnHien'];
   
    $qt->LoaiXe_Sua($idCL, $TenCL, $ThuTu,$AnHien);
    echo "<script>document.location='index.php?p=loaixe_ds';</script>";
    exit();
}

?>

<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
        <div class="card">
            <div class="header">
                <h2>
                   Sửa loại xe
                </h2>

            </div>
            <div class="body">
                <form class="form-horizontal" method="post" action="">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="Ten">Tên</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="Ten" name="TenCL" class="form-control" 
                                    placeholder="Nhập tên loại xe" maxlength="30" minlength="3" required value="<?=$row['tencl']?>" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="ThuTu">Thứ tự</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="ThuTu" name="ThuTu" class="form-control" 
                                    placeholder="Nhập thứ tự xuất hiện" required min="1" max="1000" value="<?=$row['thutu']?>" >
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
                                    <input type="radio" id="AnHien_1" name="AnHien" <?=($row['anhien']==1)?"checked":""?> value="1"> <label for="AnHien_1">Hiện</label>
                                    <input type="radio" id="AnHien_0" name="AnHien" <?=($row['anhien']==0)?"checked":""?>  value="0">
                                    <label for="AnHien_0">Ẩn</label></div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Sửa loại xe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
