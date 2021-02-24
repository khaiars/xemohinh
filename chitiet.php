

<?php 
$idSP = $_GET['idSP']; settype($idSP,"int");
$row = $xe->ChiTietSP($idSP);

?>

<section id="main">
    <div class="container_12">
       <div id="content" class="grid_9">
	      <h1 class="page_title"><?=$row['TenSP']?></h1>

		<div class="product_page">
			<div class="grid_4 img_slid" id="products">
				<div class="preview slides_container">
					
						<a class="jqzoom" rel="gal1" href="<?=BASE_URL."upload/".$row['urlHinh']?>" >
							<img src="<?=BASE_URL."upload/".$row['urlHinh']?>" width="800px" height="180px" title="" alt=""/>
						</a>
					
				</div><!-- .prev -->

				

				
			</div><!-- .grid_4 -->

			<div class="grid_5">
				<div class="entry_content">
					<div class="review">
						
						<span><?=$row['SoLanXem']?> lần xem.</span>
						
					</div>
					
					<div class="ava_price">
						<div class="availability_sku">
							<div class="availability">
								Số lượng: <span><?=$row['SoLuongTonKho']?></span>
							</div>
							
						</div><!-- .availability_sku -->

						<div class="price">
                            
							<div class="price_new">Giá Khuyến Mãi : <?=number_format($row['GiaKM'],0, ",",".");?> VND</div>
							<div class="price_old">Giá : <?=number_format($row['Gia'],0, ",",".");?> VND</div>
						</div><!-- .price -->
					</div><!-- .ava_price -->

					<div class="block_cart">
					

						<div class="cart">
							<a href="capnhatGH.php?action=add&idSP=<?= $row['idSP'] ?>" class="bay">Thêm vào giỏ hàng</a>
							
						
						</div>
						<div class="clear"></div>
					</div><!-- .block_cart -->
					<div class="soc">
						<img src="images/soc.png" alt="Soc"/>
					</div><!-- .soc -->
				</div><!-- .entry_content -->

			</div><!-- .grid_5 -->

			<div class="clear"></div>

			<div class="grid_9" >
				<div id="wrapper_tab" class="tab1">
					<h2>Description</h2>
					
					
					<div class="clear"></div>

					<div class="tab1 tab_body">
						
						<p><?=$row['MoTa']?></p>
						
					<div class="clear"></div>
					</div><!-- .tab1 .tab_body -->

					<!-- .tab2 .tab_body -->

					<!-- .tab3 .tab_body -->
					<div class="clear"></div>
				</div>​<!-- #wrapper_tab -->
				<div class="clear"></div>
			</div><!-- .grid_9 -->

			<div class="clear"></div>

			<!-- .carousel -->
		</div><!-- .product_page -->
		<div class="clear"></div>

       </div><!-- #content -->
       
       

      <div class="clear"></div>

    </div><!-- .container_12 -->
  </section>