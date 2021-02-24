<?php
session_start();
include("class/dbconnect.php");
if (isset($_POST['u'])) {
    $username = $_POST['u'];
    $password = md5($_POST['p']);
    $sql = sprintf("SELECT * FROM users WHERE username='%s' AND Password='%s'", $username, $password);
    $user = mysqli_query($con, $sql);
   // echo($user);
    if (mysqli_num_rows($user) == 1) {
        $row_user = mysqli_fetch_assoc($user);
        $_SESSION['username'] = $row_user['username'];
        $_SESSION['hoten'] = $row_user['HoTen'];
        header("location: index.php?p");
        echo("DANG NHAP THANH CONG");
    } else {
        $thongbao = "<p><font color='red'><b?>Đăng nhập thất bại.vui long kiểm tra lại</b></font></p><br>";
    }
}
?>
