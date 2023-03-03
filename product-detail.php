<!DOCTYPE html>
<html lang="en">
  <?php
   include("partials/head.php");
  ?>
<body class="animsition">

		<?php
		  include("partials/header.php");
		?>

	<!-- breadcrumb -->
	<div class="container">
		
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
			<?php
			 include('partials/connect.php');
			$id=$_GET['details_id'];
			$req = $bdd->prepare('SELECT * FROM products WHERE id = :id');
            $req->execute(array('id' => $id)); 
			while ($row = $req->fetch()) 
           {?>
		   
	
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								

								<div class="item-slick3" data-thumb="admin/<?php echo $row['picture'] ?>">
									<div class="wrap-pic-w pos-relative" style="height:600px">
										<img src="admin/<?php echo $row['picture'] ?>" alt="IMG-PRODUCT">
             
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="admin/<?php echo $row['picture'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
							
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $row['name'] ?>
						</h4>

						<span class="mtext-106 cl2">
							<?php echo $row['price'] ?> $
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php echo $row['description'] ?>
						</p>
						
						<!--  -->
						<div class="p-t-33">

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">

	<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" name="addtocart" 
	  onclick="location.href='carthandler.php?cart_id=<?php echo $row['id'] ?>&cart_name=<?php echo $row['name']?>&cart_price=<?php echo $row['price'] ?>'">
										Ajouter au panier
									</button>
								</div>
							</div>	
						</div>

	</section>


	<!-- Related Products -->

	<?php }  ?>
	<!-- Footer -->
	<?php
	  include("partials/footer.php");
	?>
	
</body>
</html>