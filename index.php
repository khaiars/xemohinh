<?php
session_start();
$p = $_GET['p']; //đây là tham số 
require_once "class/xe.php";
require_once "class/dbconnect.php";
$xe = new xe;
if (!isset($_SESSION["somathang"]))
$_SESSION["somathang"]=0;
$tongtien = $tongsoluong = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mô hình xe</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/menu.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
  <?php require "view/header.php" ?>
  <?php require "view/menumoi.php" ?>
  <?php require "view/main.php" ?>
  
  <div class="row">
  </div>
  <?php require "view/footer.php" ?>
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.sliderControl.js"></script>
		<script type="text/javascript" src="js/jquery.timeago.js"></script>
		<script type="text/javascript" src="js/jquery.hint.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>