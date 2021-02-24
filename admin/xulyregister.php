<?php

include("config/dbconnect.php");
// gan vao bien
$username =$_POST["username"];
$password =$_POST["password"];
$repass =$_POST["repass"];
$sdt =$_POST["sdt"];
$diachi =$_POST["diachi"];
$hoten =$_POST["hoten"];
$email =$_POST["email"];


// kiem tra o chua duoc nhap
if (!$username || !$password || !$repass || !$sdt || !$diachi || !$hoten || !$email  )
    {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin') ; history.back()</script>";
        exit;
    }


// kiem tra dinh dang cua email
if (!mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
{
    echo "<script>alert('Email không đúng định dạng') ; history.back()</script>";
    exit;
}
 //Kiểm tra dạng nhập vào của ngày sinh


if($repass !=$password){
    
    echo "<script>alert('password không giống nhau') ; history.back()</script>";
    exit;
}
$password = md5($password);   
$add = "INSERT INTO users(username,
        HoTen, 
        Password, 
        DiaChi,
        DienThoai,
        Email ) VALUES( '$username',
            '$hoten',
            '$password',
            '$diachi',
            '$sdt',    
            '$email' )";

mysqli_query($con,$add);
if ($add)
echo "Quá trình đăng ký thành công. <a href='./index.php'>Về trang chủ</a>";
else
echo "<script>alert('có lỗi) ; history.back()</script>";
    exit;
