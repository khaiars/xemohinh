<div class="header">
    <div class="hLeft">
        <h1><img src="images/logo.jfif" alt="" /></h1>
    </div>
    <div class="hRight">
        <ul>
            <h1 style="font-size: 35px">Mô hình tĩnh</h1>
        </ul>
    </div>
    <div class="grid_6">
        <form class="search" action="" method="get">
            <?php
            $tukhoa = (isset($_GET['tukhoa']) == true) ? $_GET['tukhoa'] : "";
            $tukhoa = str_replace(array('"', '"'), "", trim(strip_tags($tukhoa)));
            ?>
            <input type="hidden" name="p" value="search">
            <input type="text" name="tukhoa" class="entry_form" value="<?=$tukhoa?>"  placeholder="Tìm Kiếm">
        </form>
    </div>
</div>