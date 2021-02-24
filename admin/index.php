<?php
session_start();
$p = $_GET['p'];
require_once "../class/quantri.php";
require_once "../class/dbconnect.php";
$qt = new quantri;
if (isset($_SESSION['login_id']) == false) {
    $_SESSION['error'] = 'Bạn chưa đăng nhập';
    $_SESSION['back'] = $_SERVER['REQUEST_URI'];
    header('location:login.php');
    exit();
} elseif ($_SESSION['login_level'] != 1) {
    $_SESSION['error'] = 'Bạn không có quyền xem trang này';
    $_SESSION['back'] = $_SERVER['REQUEST_URI'];
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Admin</title>
</head>

<body>
    <div id="container">
        <?php require "view/menu.php" ?>

        <!--#menu-->

        <div id="content">
            <?php require "view/header.php" ?>

            <?php
            switch ($p) {
                case "loaixe_ds":
                    require "view/dsloaixe.php";
                    break;
                case "loaixe_them":
                    require "view/loaixe_them.php";
                    break;
                case "loaixe_sua":
                    require "view/loaixe_sua.php";
                    break;
                case "loaixe_xoa":
                    require "view/loaixe_xoa.php";
                    break;


                case "xe_ds":
                    require "view/dsxe.php";
                    break;
                case "xe_them":
                    require "view/xe_them.php";
                    break;
                case "xe_sua":
                    require "view/xe_sua.php";
                    break;
                case "xe_xoa":
                    require "view/xe_xoa.php";
                    break;

                case "user_ds":
                    require "view/dsuser.php";
                    break;
                case "user_them":
                    require "view/user_them.php";
                    break;
                case "user_sua":
                    require "view/user_sua.php";
                    break;

                case "donhang_ds":
                    require "view/dsdonhang.php";
                    break;
                case "donhang_them":
                    require "view/donhang_them.php";
                    break;
                case "donhang_sua":
                    require "view/donhang_sua.php";
                    break;
                    // default: require "dashboard.php";                
            } //switch
            ?>

        </div>
        <!--#content-->

        <?php require "view/footer.php" ?>

    </div>
    <!--#container-->

</body>

</html>