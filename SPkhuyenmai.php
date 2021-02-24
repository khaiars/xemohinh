<div class="sanphamall">
  <ul>
    <?php while ($row = $listSP->fetch_assoc()) { ?>
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
        </a></li>
    <?php
    }
    ?>
  </ul>
</div>