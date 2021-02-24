<?php
$idCL = $_GET['idCL'];
settype($idCL, "int");
$pageSize = PAGEGINATION_PERPAGE; //số tin sẽ hiện trong 1 trang 
if (isset($_GET['pageNum'])) $pageNum = $_GET['pageNum']; //trang user xem
settype($pageNum, "int");
if ($pageNum <= 0) $pageNum = 1;
$totalRows = 0;
$offset = PAGEGINATION_OFFSET;
$kq = $xe->SanPhamTrongDanhMuc($idCL, $pageNum, $pageSize, $totalRows);
?>
<h1>Sản phẩm </h1>
<div>
    <div class="danhsachsanpham">
        <ul>
            <?php while ($row = $kq->fetch_assoc()) { ?>
                <li><a href="index.php?p=chitiet&idSP=<?=$row['idSP']?>">
                        <div class="image">
                            <img src="Upload/<?= $row['urlHinh'] ?>" />
                        </div>
                        <div class="text">
                            <p><?= $row['TenSP'] ?></p>
                            <p><?=number_format($row['Gia'],0, ",",".");?> VND</p>
                        </div>
                        <div class="button">
                            <a href="capnhatGH.php?action=add&idSP=<?= $row['idSP'] ?>" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Chọn</a>
                            <div class="button">
                            </div>
                        </div>
                    </a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="clear"></div>
 
    <?php if ($totalRows > $pageSize) { ?>
        <?php
        $totalPages = ceil($totalRows / $pageSize);
        $from = $pageNum - $offset;
        $to = $pageNum + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalPages) $to = $totalPages;
        $pagePrev = $pageNum - 1;
        $pageNext = $pageNum + 1;
        ?>
        <ul class="pagination clearfix page_margin_top_section">
            <?php //Hiện link tới trang đầu, trang trước
            ?>
            <?php if ($pageNum > 1) { ?>
                <li>
                    <a href="index.php?p=cat&idCL=<?= $idCL ?>">Đầu</a>
                </li>
                <li>
                    <a href="index.php?p=cat&idCL=<?= $idCL ?>&pageNum=<?= $pagePrev ?>">Trước</a>
                </li>
            <?php } //if ($pageNum>1
            ?>


            <?php //Hiện các con sô trong thanh phân trang
            ?>
            <?php for ($j = $from; $j <= $to; $j++) { ?>
                <?php if ($j != $pageNum) { ?>
                    <li>
                        <a href="index.php?p=cat&idCL=<?= $idCL ?>&pageNum=<?= $j ?>"><?= $j ?></a>
                    </li>
                <?php } else { ?>
                    <li class="selected">
                        <a href="index.php?p=cat&idCL=<?= $idCL ?>&pageNum=<?= $j ?>"><?= $j ?></a>
                    </li>
                <?php } //if ($j
                ?>
            <?php } //for
            ?>



            <?php //Hiện link tới trang trước, trang cuối
            ?>
            <?php if ($pageNum < $totalPages) { ?>
                <li>
                    <a href="index.php?p=cat&idCL=<?= $idCL ?>&pageNum=<?= $pageNext ?>">Sau</a>
                </li>
                <li>
                    <a href="index.php?p=cat&idCL=<?= $idCL ?>&pageNum=<?= $totalPages ?>">Cuối</a>
                </li>
            <?php } //if ($pageNum<$totalPages) 
            ?>

        </ul>
    <?php } ?>
</div>