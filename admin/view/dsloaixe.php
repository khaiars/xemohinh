<?php
$sql = "SELECT * FROM danhmucsp";
$query = mysqli_query($con, $sql);
?>
<div class="row">
    <button onclick="window.location.href='<?= BASE_URL ?>admin/index.php?p=loaixe_them'"> Thêm loại xe</button>
</div>
<table id="ds">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tên loại xe</td>
            <td>Thu Tu</td>
            <td>An|Hien</td>
            <td>Hành động</td>
        <tr>
    </thead>
    <tbody>
        <?php
        while ($data = mysqli_fetch_array($query)) {
            $i = 1;
            $id = $data['idcl'];
        ?>
            <tr>
                <td><?php echo $data['idcl']; ?></td>
                <td><?php echo $data['tencl']; ?></td>
                <td><?php echo $data['thutu']; ?></td>
                <td><?php echo $data['anhien']; ?></td>
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