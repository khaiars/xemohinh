<?php
require_once "../config.php";
class quantri {
	protected $db;
	function __construct(){
	   $this->db = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);
	   $this->db->set_charset("utf8"); 
    } 
    function ListLoaiXe(){
        $sql="SELECT * from danhmucsp ";
        $kq = $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
        return $kq; 
     }
     
	function LoaiXe_Them($TenCL, $ThuTu,$AnHien){
        $TenTL= $this->db->escape_string(trim(strip_tags($TenCL)));
        settype($ThuTu,"int");
        settype($AnHien,"int");
        $sql="INSERT INTO danhmucsp SET tencl='$TenCL', thutu=$ThuTu, anhien=$AnHien";
        $kq= $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
    }
    function LoaiXe_ChiTiet($idCL){
        $sql="SELECT idcl, tencl, thutu, anhien
        FROM danhmucsp  
        WHERE idcl=$idCL";
        $kq = $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
        return $kq; 
    }
    function LoaiXe_Sua($idCL, $TenCL, $ThuTu,$AnHien){
        settype($idCL,"int");
        $TenCL= $this->db->escape_string(trim(strip_tags($TenCL)));
        settype($ThuTu,"int");
        settype($AnHien,"int");
        $sql="UPDATE danhmucsp SET tencl='$TenCL',  thutu=$ThuTu, anhien=$AnHien
        WHERE idcl=$idCL";
        $kq= $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
    }
    function LoaiXe_Xoa($idCL){
        settype($idCL,"int");
        $sql="DELETE FROM danhmucsp WHERE idcl=$idCL";
         $kq= $this->db->query($sql) ;
         if(!$kq) die( $this-> db->error);		
    }
    function Xe_Them($tensp, $Ngay, $mota, $anhien,$gia, $soluongtonkho, $idCL,$name){
        $tensp = $this->db->escape_string(trim(strip_tags($tensp)));
        $mota = $this->db->escape_string(trim(strip_tags($mota)));
        $name = $this->db->escape_string(trim(strip_tags($name)));
        $arr = explode ("/", $Ngay);
        if (count($arr)==3) $Ngay = $arr[2]."-".$arr[1]."-".$arr[0];
        else $Ngay = date("Y-m-d");      
        settype($anhien,"int");
        settype($gia,"int");
        settype($soluongtonkho,"int");
        settype($idCL,"int");
        settype($anhien,"int");
        settype($gia,"int");
        settype($soluongtonkho,"int");
        settype($idCL,"int");
        $sql="INSERT INTO sanpham SET TenSP='$tensp',Mota='$mota', idCL=$idCL, AnHien=$anhien, 
         Gia=$gia, NgayCapNhat='$Ngay', SoLuongTonKho = '$soluongtonkho', urlHinh = '$name'" ;
        $kq= $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
    }
    function Xe_ChiTiet($idSP){
        $sql="SELECT * FROM sanpham  
        WHERE idSP=$idSP";
        $kq = $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
        return $kq; 
    }
    function Xe_Sua($idSP, $tensp, $Ngay, $mota, $anhien,$gia, $soluongtonkho, $idCL,$name){
        $tensp = $this->db->escape_string(trim(strip_tags($tensp)));
        $mota = $this->db->escape_string(trim(strip_tags($mota)));
        $name = $this->db->escape_string(trim(strip_tags($name)));
        $arr = explode ("/", $Ngay);
        if (count($arr)==3) $Ngay = $arr[2]."-".$arr[1]."-".$arr[0];
        else $Ngay = date("Y-m-d");  
        settype($idSP,"int");
        settype($anhien,"int");
        settype($gia,"int");
        settype($soluongtonkho,"int");
        settype($idCL,"int");
        settype($anhien,"int");
        settype($gia,"int");
        settype($soluongtonkho,"int");
        $sql="UPDATE sanpham SET TenSP='$tensp',Mota='$mota', idCL='$idCL', AnHien='$anhien', 
         Gia='$gia',  NgayCapNhat='$Ngay', SoLuongTonKho = '$soluongtonkho', urlHinh = '$name' WHERE idSP='$idSP'" ;
        $kq= $this->db->query($sql) ;
        if(!$kq) die( $this-> db->error);
        

    }
    function Xe_Xoa($idSP){
        settype($idSP,"int");
        $sql="DELETE FROM sanpham WHERE idSP=$idSP";
         $kq= $this->db->query($sql) ;
         if(!$kq) die( $this-> db->error);		
    } 
	
} 
?> 
