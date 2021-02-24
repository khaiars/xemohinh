
<?php
	$sql = "SELECT donhangchitiet.TenSP, donhangchitiet.SoLuong, donhangchitiet.Gia, donhangchitiet.idDH ,donhang.idDH ,donhang.ThoiDiemDatHang, donhang.TenNguoiNhan, donhang.DTNguoiNhan, donhang.DiaChi, donhang.TongTien, donhang.DaXuLy 
	FROM donhangchitiet , donhang 
	WHERE donhangchitiet.idDH = donhang.idDH";
	$query = mysqli_query($con,$sql);
?>
<table id="ds">
	<thead>
		<tr>
            <td >ID đơn hàng</td>
            <td >Thời điểm đặt hàng </td>
			<td >Tên </td>
			<td >Sđt nhận hàng</td>    
            <td >Địa chỉ</td>
            <td >Sản Phẩm</td>
            <td >Tổng tiền</td>
            <td >Xử lý</td>
		<tr>
	</thead>
	<tbody>
		<?php 
				while ( $data = mysqli_fetch_array($query) ) {
					$i = 1;
					$id = $data['idDH'];
			?>
		<tr>
				<td><?php echo $data['idDH']; ?></td>
				<td><?php echo $data['ThoiDiemDatHang']; ?></td>
				<td><?php echo $data['TenNguoiNhan']; ?></td>
				<td><?php echo $data['DTNguoiNhan']; ?></td>
				<td><?php echo $data['DiaChi']; ?></td>
				<td><?php echo $data['TenSP']; ?></td>
				<td><?php echo $data['DaXuLy']; ?></td>
				
				<td>
				
				<form>
				<input type="checkbox" name="vehicle1" value="Bike">
				</form>
				
				</td>
		</tr>
		<?php 
			$i++;
			}
		?>	
	</tbody>
</table>