<?php
$sql = "SELECT sanpham.idCL, sanpham.TenSP,sanpham.idSP, sanpham.AnHien,sanpham.Mota, sanpham.NgayCapNhat,sanpham.Gia, sanpham.GiaKM, sanpham.urlHinh, sanpham.SoLuongTonKho,sanpham.Hot ,danhmucsp.idcl, danhmucsp.tencl
 		FROM sanpham, danhmucsp WHERE sanpham.idCL = danhmucsp.idcl";
$query = mysqli_query($con, $sql);

?>
<div class="row">
    <button onclick="window.location.href='<?= BASE_URL ?>admin/index.php?p=xe_them'"> Thêm xe mới</button>
</div>


<table id="ds">
	<thead>
		<tr>
			<td >ID</td>
			<td >Tên Xe</td>
			<td >Mô tả</td>
			<td >Ngày Cập Nhật</td>
			<td >Giá</td>
			<td >Hình Ảnh</td>
			<td >Số lượng tồn kho</td>
			<td >Loại</td>
			<td >Option</td>
		<tr>
	</thead>
	<tbody>
        <?php
        while ($data = mysqli_fetch_array($query)) {
            $i = 1;
            $id = $data['idSP'];
        ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $data['TenSP']; ?></td>
                <td><?php echo $data['Mota']; ?></td>
                <td><?php echo $data['NgayCapNhat']; ?></td>
                <td><?php echo $data['Gia']; ?></td>   
                <?php
                
                ?>
                <td><img src="../../xemohinh/Upload/<?php echo $data['urlHinh'] ?>" width="80" height="80"/></td>
				<td><?php echo $data['SoLuongTonKho']; ?></td>
				<td><?php echo $data['tencl']; ?></td>
                <td>
                    <script>
                        function ConfirmDelete() {
                            var x = confirm("Bạn có chắc chắn muốn xoá?");
                            if (x)
                            window.location.href="<?= BASE_URL ?>admin/index.php?p=xe_xoa&idSP=<?= $data['idSP'] ?>'";
                            else
                                return false;
                        }
                    </script>
                    <button onclick="window.location.href='<?= BASE_URL ?>admin/index.php?p=xe_sua&idSP=<?= $data['idSP'] ?>'"> Sửa</button>
                    <button onclick="return ConfirmDelete();"> Xoá</button>

                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>