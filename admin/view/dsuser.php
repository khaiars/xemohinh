
<?php
	$sql = "SELECT * FROM users";
	$query = mysqli_query($con,$sql);
?>
<div class="row">
    <button onclick="window.location.href='<?= BASE_URL ?>admin/index.php?p=user_them'"> Thêm loại xe</button>
</div>
<table id="ds">
	<thead>
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Hoten</td>
			<td>Email</td>
			<td>Sđt</td>
			<td>Khóa tài khoản</td>
			<td> GioiTinh</td>
			<td >Hành động</td>
		<tr>
	</thead>
	<tbody>
	<?php 
            while ( $data = mysqli_fetch_array($query) ) {
                $i = 1;
                $id = $data['idUser'];
        ?>
    <tr>
			<td><?php echo $data['idUser']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['HoTen']; ?></td>
			<td><?php echo $data['Email']; ?></td>
			<td><?php echo $data['DienThoai']; ?></td>
            <td><?php echo $data['active']; ?></td>
			<td><?php echo $data['GioiTinh']; ?></td>
			<td>
                    <script>
                        function ConfirmDelete() {
                            var x = confirm("Bạn có chắc chắn muốn xoá?");
                            if (x)
                            window.location.href="<?= BASE_URL ?>admin/index.php?p=loaixe_xoa&idCL=<?= $data['idcl'] ?>'";
                            else
                                return false;
                        }
                    </script>
                    <button onclick="window.location.href='<?= BASE_URL ?>admin/index.php?p=loaixe_sua&idCL=<?= $data['idcl'] ?>'"> Sửa</button>
                    <button onclick="return ConfirmDelete();"> Xoá</button>

                </td>
		</tr>
		<?php 
            $i++;
            }
        ?>
	</tbody>
</table>