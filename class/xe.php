<?php
require_once "class/goc.php";
class xe extends goc
{
    function SanPhamMoi($sosp = 10)
    {
        $sql = "SELECT idSP ,TenSP , Gia,urlHinh,GiaKM from sanpham  WHERE AnHien = 1 
        ORDER BY NgayCapNhat DESC LIMIT 0 ,$sosp";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    }
    function ListDanhMucSP()
    {
        $sql = "SELECT idcl,tencl  FROM danhmucsp
        WHERE anhien=1 ORDER BY thutu ";
        $kq = $this->db->query($sql);
        if (!$kq) die('Lỗi trong hàm ' . __FUNCTION__ . ' ' . $this->db->error);
        return $kq;
    }
    function SanPhamBanChay($sosp = 10)
    {
        $sql = "SELECT idSP ,TenSP , Gia,urlHinh from sanpham WHERE AnHien=1 
        ORDER BY SoLanMua DESC LIMIT 0,$sosp";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    }
    function SanPhamTrongDanhMuc($idCL,$pageNum, $pageSize,&$totalRows )
    {
        $startRow = ($pageNum-1)*$pageSize;
        $sql = "SELECT idSP, TenSP, MoTa, urlHinh, NgayCapNhat, SoLanXem,Gia
        FROM sanpham WHERE AnHien = 1 AND idCL=$idCL ORDER BY idSP DESC LIMIT $startRow , $pageSize ";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        $sql = "SELECT count(*) FROM  sanpham WHERE AnHien = 1 AND idcl=$idCL";	
        $rs = $this->db->query($sql) ;	
        $row_rs = $rs->fetch_row();
        $totalRows = $row_rs[0];
        if(!$kq) die( $this-> db->error);
        return $kq;
    }
    function CapNhatGioHang($action, $idSP)
    {
        if (!isset($_SESSION['daySoLuong'])) $_SESSION['daySoLuong'] = array();
        if (!isset($_SESSION['dayDonGia']))  $_SESSION['dayDonGia'] = array();
        if (!isset($_SESSION['dayTenSP']))   $_SESSION['dayTenSP'] = array();
        if (!isset($_SESSION['dayHinhSP']))   $_SESSION['dayHinhSP'] = array();

        if ($action == "add") {
            settype($idSP, "int");
            if ($idSP <= 0) return;
            $sql = "SELECT TenSP , Gia, SoLuongTonKho,urlHinh FROM sanpham WHERE idSP=$idSP";
            $kq = $this->db->query($sql);
            if (!$kq) die($this->db->error);
            $row = $kq->fetch_assoc();
            $_SESSION['dayTenSP'][$idSP] = $row['TenSP'];
            $_SESSION['dayHinhSP'][$idSP] = $row['urlHinh'];
            $_SESSION['dayDonGia'][$idSP] = $row['Gia'];
            $_SESSION['daySoLuong'][$idSP] += 1;
            if ($_SESSION['daySoLuong'][$idSP] > $row['SoLuongTonKho']) $_SESSION['daySoLuong'][$idSP] = $row['SoLuongTonKho'];
        } //add

        if ($action == "delete") {
            settype($idSP, "int");
            if ($idSP <= 0) return;
            $sql = "SELECT TenSP , Gia, SoLuongTonKho,urlHinh FROM sanpham WHERE idSP=$idSP";
            $kq = $this->db->query($sql);
            if (!$kq) die($this->db->error);
            $row = $kq->fetch_assoc();

            $_SESSION['dayTenSP'][$idSP] = $row['TenSP'];
            $_SESSION['dayDonGia'][$idSP] = $row['Gia'];
            $_SESSION['dayHinhSP'][$idSP] = $row['urlHinh'];
            $_SESSION['daySoLuong'][$idSP] -= 1;

            if ($_SESSION['daySoLuong'][$idSP] < 0) $_SESSION['daySoLuong'][$idSP] = 0;
        } //delete


        if ($action == "remove") {
            settype($idSP, "int");
            if ($idSP <= 0) return;
            unset($_SESSION['dayTenSP'][$idSP]);
            unset($_SESSION['dayDonGia'][$idSP]);
            unset($_SESSION['daySoLuong'][$idSP]);
            unset($_SESSION['dayHinhSP'][$idSP]);
        } //remove

    } //update
    function LuuDonHang(&$error)
    {
        $hoten = $this->db->escape_string(trim(strip_tags($_SESSION['DonHang']['hoten'])));
        $dienthoai = $this->db->escape_string(trim(strip_tags($_SESSION['DonHang']['dienthoai'])));
        $diachi = $this->db->escape_string(trim(strip_tags($_SESSION['DonHang']['diachi'])));
        $email = $this->db->escape_string(trim(strip_tags($_SESSION['DonHang']['email'])));
        $pttt = $this->db->escape_string(trim(strip_tags($_SESSION['DonHang']['payment'])));
        $ptgh = $this->db->escape_string(trim(strip_tags($_SESSION['DonHang']['delivery'])));
       
        

        //kiểm tra dữ liệu  
        if (count($_SESSION['daySoLuong']) == 0) $error[] = "Bạn chưa chọn sản phẩm nào";
        if ($hoten == "") $error[] = "Bạn chưa nhập họ tên";
        if ($diachi == "") $error[] = "Bạn chưa nhập địa chỉ";
        if ($email == "") $error[] = "Bạn chưa nhập email";
        if ($dienthoai == "") $error[] = "Bạn ơi! Điện thoại người nhận chưa có";
        if ($pttt == "") $error[] = "Bạn chưa chọn phương thức thanh toán";
        if ($ptgh == "") $error[] = "Bạn chưa chọn phương thức giao hàng";
        if (count($error) > 0) return;

        //lưu dữ liệu vào db    
        if (isset($_SESSION['DonHang']['idDH']) == false) {
            $sql = "INSERT INTO donhang SET TenNguoiNhan = '$hoten',DiaChi =
           '$diachi', DTNguoiNhan = '$dienthoai',	idPTTT = '$pttt',idPTGH=
           '$ptgh' , thoidiemdathang = now() ";
            $kq = $this->db->query($sql);
            if (!$kq) die($this->db->error);
            $_SESSION['DonHang']['idDH'] = $this->db->insert_id;
        } else {
            $idDH = $_SESSION['DonHang']['idDH'];
            $sql = "UPDATE donhang SET TenNguoiNhan = '$hoten',DiaChi= 
           '$diachi', DTNguoiNhan = '$dienthoai', idPTTT='$pttt',idPTGH=
           '$ptgh',ThoiDiemDatHang = now() 
          WHERE idDH = $idDH";
            $kq = $this->db->query($sql);
            if (!$kq) die($this->db->error);
        }
    } //function LuuDonHang
    function LuuChiTietDonHang()
    {
        $sosp = count($_SESSION['daySoLuong']);
        if ($sosp <= 0) {
            echo "Không có sản phẩm";
            return;
        }
        if (isset($_SESSION['DonHang']['idDH']) == false) {
            echo "Kô có idDH";
            return;
        }
        $idDH = $_SESSION['DonHang']['idDH'];
        $sql = "DELETE FROM donhangchitiet WHERE idDH = $idDH";
        $this->db->query($sql);
        reset($_SESSION['daySoLuong']);
        reset($_SESSION['dayDonGia']);
        reset($_SESSION['dayTenSP']);
        for ($i = 0; $i < $sosp; $i++) {
            $idSP = key($_SESSION['daySoLuong']);
            $tensp = current($_SESSION['dayTenSP']);
            $soluong = current($_SESSION['daySoLuong']);
            $gia = current($_SESSION['dayDonGia']);
            $sql = "INSERT INTO donhangchitiet (idDH,idSP,TenSP,SoLuong,Gia)
                    VALUES ($idDH, $idSP, '$tensp',$soluong, $gia)";
            $this->db->query($sql);
            next($_SESSION['daySoLuong']);
            next($_SESSION['dayDonGia']);
            next($_SESSION['dayTenSP']);    
        } //for
    }
    function ChiTietSP($idSP)  {
        settype($idSP, "int");
        $sql="SELECT idSP, urlHinh, TenSP ,SoLanXem,SoLuongTonKho,Gia,GiaKM,MoTa,
        sanpham.idCL, tencl
        FROM  sanpham, danhmucsp
        WHERE sanpham.idCL=danhmucsp.idcl AND idSP=$idSP";
        $kq = $this->db-> query($sql);
        if(!$kq) die('Lỗi trong hàm '.__FUNCTION__.' '. $this->db->error);
        if ($kq->num_rows<=0) return FALSE;
        return $kq->fetch_assoc(); 
    }
    function TimKiem($tukhoa, &$totalRows, $pageNum=1, $pageSize=4){
        $startRow = ($pageNum-1)*$pageSize;
         $tukhoa = $this->db-> escape_string( trim(strip_tags($tukhoa)) );
         $sql = "SELECT idSP, TenSP, MoTa, urlHinh, NgayCapNhat, SoLanXem,Gia
         FROM sanpham, danhmucsp
         WHERE sanpham.AnHien = 1 AND sanpham.idCL = danhmucsp.idcl
         AND (TenSP RegExp '$tukhoa' ) 
         ORDER BY idSP DESC LIMIT $startRow , $pageSize ";		
         $kq = $this->db->query($sql);
        if(!$kq) die( 'Lỗi trong hàm ' . __FUNCTION__. '  '. $this-> db->error);
     
         $sql = "SELECT count(*) 
         FROM sanpham, danhmucsp
         WHERE  sanpham.AnHien = 1 AND sanpham.idCL = danhmucsp.idcl 
         AND (TenSP RegExp '$tukhoa') ";	
         $rs = $this->db->query($sql);
        if(!$rs) die( 'Lỗi trong hàm ' . __FUNCTION__. '  '. $this-> db->error);
        $row_rs = $rs->fetch_row();
        $totalRows = $row_rs[0];
         return $kq;
     }
     
}
