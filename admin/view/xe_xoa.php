<?php
$idSP = $_GET['idSP']; settype($idSP,"int");
$kq = $qt->Xe_Xoa($idSP);
header("location:index.php?p=xe_ds");