<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-muted lead">Giỏ hàng hiện <?php $soluong ?>có sản phẩm.</p>
        </div>
        <div class="col-md-9 clearfix" id="basket">
            <div class="box">
                <form method="post" action="capnhatGH.php?action=update">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Tên SP</th>
                                    <th >Số lượng</th>
                                    <th >Giá</th>
                                    <th>tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                reset($_SESSION['daySoLuong']);
                                reset($_SESSION['dayDonGia']);
                                reset($_SESSION['dayTenSP']);
                              
                                ?>

                                <?php for ($i = 0; $i < count($_SESSION['daySoLuong']); $i++) { ?>
                                    <?php
                                    $idSP = key($_SESSION['daySoLuong']);
                                    $tensp = current($_SESSION['dayTenSP']);
                                    $soluong = current($_SESSION['daySoLuong']);
                                    $dongia = current($_SESSION['dayDonGia']);
                                    $hinhsp = current($_SESSION['dayHinhSP']);
                                    $tien = $dongia * $soluong;
                                    $tongtien += $tien;
                                    $tongsoluong+= $soluong;
                                    ?>
                                    <tr>
                                        <td >
                                            <a href="#">
                                                <img src="<?= BASE_URL . "Upload/" . $hinhsp ?>" alt="White Blouse Armani">
                                            </a>
                                        </td>
                                        <td ><a  href="#"><?= $tensp ?></a>
                                        </td>
                                        <td>
                                            <a href="capnhatGH.php?action=add&idSP=<?= $idSP ?>">
                                            <input width="5dp" type="number" value="<?= $soluong ?>" class="form-control " name="soluong_arr[]">
                                            <input width="5dp" type="hidden" value="<?= $idSP ?>" name="iddt_arr[]">
                                            <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                            <a href="capnhatGH.php?action=delete&idSP=<?= $idSP ?>">
                                            <button class="btn btn-default bootstrap-touchspin-up" type="button">-</button>
                                        </td>
                                        <td><?= number_format($dongia, 0, ",", "."); ?> VND</td>
                                        <td><?= number_format($tien, 0, ",", "."); ?> VND</td>
                                       
                                        </td>
                                        <td><a href="capnhatGH.php?action=remove&idSP=<?=$idSP?>"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                    </tr>
                                    <?php
                                    next($_SESSION['daySoLuong']);
                                    next($_SESSION['dayDonGia']);
                                    next($_SESSION['dayTenSP']);
                                    next($_SESSION['dayHinhSP']);
                                    
                                    ?>
                                <?php } //for 
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="1">Tổng tiền</th>
                                    <th colspan="5" id='tongtien' name='tongtien'><?= number_format($tongtien, 0, ",", "."); ?> VND</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.table-responsive -->
                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="<?= BASE_URL ?>index.php?p" class="btn btn-default"><i class="fa fa-chevron-left"></i> Trở lại trang chủ</a>
                        </div>
                        <div class="pull-right">
                           
                            <a class="btn btn-template-main" href="<?= BASE_URL ?>index.php?p=thanhtoan1 ">Thanh toán <i class="fa fa-chevron-right"></i></a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-md-9 -->
        <div class="col-md-3">
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h3>Đơn hàng</h3>
                </div>
                <p class="text-muted">Thông tin đơn hàng hiện tại của bạn.</p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr class="total">
                                <td>Tổng tiền </td>
                                <th><?= number_format($tongtien, 0, ",", "."); ?> VND</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.col-md-3 -->
    </div>
</div>