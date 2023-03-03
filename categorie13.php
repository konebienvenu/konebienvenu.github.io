<!DOCTYPE html>
<html lang="en">
  <?php
   include("partials/head.php");
  ?>
<body class="animsition">

		<?php
		  include("partials/header.php");
		?>
	<!-- Product --><br><br>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
			   <a href="product.php">
			        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						 Tout les produits
					</button>
				</a>
				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=1');
                 while ($row = $req->fetch()) {?>
				    <a style="text-decoration:none" href="categorie1.php">
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>
				
				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=2');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie2.php">
					 <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=3');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie3.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=4');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie4.php">
					 <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=5');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie5.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=6');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie6.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=7');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie7.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=8');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie8.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=9');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie9.php">
					  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=10');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie10.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=11');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie11.php">
					 <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=12');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie12.php">
					  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=13');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie13.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        <?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=14');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie14.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>

				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=15');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie15.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>
				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=16');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie16.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>
				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=17');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie17.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>
				<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=18');
                 while ($row = $req->fetch()) {?>
				    <a href="categorie18.php">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						<?php echo $row['name'] ?>
					</button>
					</a>
				<?php } ?>
					
				</div>
				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						RECHERCHE
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Recherche">
					</div>	
				</div>


						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
			 <?php 
			include('partials/connect.php');
			$req = $bdd->query('SELECT * FROM products WHERE category_id=13');
			while ($row = $req->fetch()) 
           {?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					 <!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="admin/<?php echo $row['picture'] ?>" alt="IMG-PRODUCT" style="min-height:400px; max-height:400px; ">

							<a href="product-detail.php?details_id=<?php echo $row['id'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Plus de Détails
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.php?details_id=<?php echo $row['id'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['name']?>
								</a>

								<span class="stext-105 cl3">
									<?php echo $row['price']?> $
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01." alt="">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02." alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
            <?php } ?>
				
			</div>

		</div>
	</div>
		
	<!-- Footer -->
	<?php 
	  include("partials/footer.php");
	?>
	
</body>
</html>
