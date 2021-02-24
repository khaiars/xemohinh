<?php
session_start();
require_once "class/xe.php";
$xe = new xe;

$action=$_GET['action']; // để biết phải làm gì:thêm/xoá/cập nhật
$idSP=$_GET['idSP'];    // để biết sản phẩm nào mà thêm hay bớt
$xe->CapNhatGioHang($action, $idSP);
if ($action=="add") header("location:index.php?p=giohang" );
if ($action=="remove") header("location:index.php?p=giohang");
if ($action=="update") header("location:index.php?p=giohang");
if ($action=="delete") header("location:index.php?p=giohang");
// print_r($_SESSION['daySoLuong']); echo "<br>";
// print_r($_SESSION['dayTenDT']); echo "<br>";
// print_r($_SESSION['dayDonGia']); echo "<br>";
// print_r($_SESSION['dayHinhDT']); echo "<br>";


