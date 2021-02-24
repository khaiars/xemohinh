<?php
$idCL = $_GET['idCL']; settype($idCL,"int");
$kq = $qt->LoaiXe_Xoa($idCL);
header("location:index.php?p=loaixe_ds");
