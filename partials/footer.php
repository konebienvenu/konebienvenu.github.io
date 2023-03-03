<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>
       
					<ul>
						<li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=1');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie1.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					   <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=2');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie2.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=3');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie3.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=4');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie4.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=5');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie5.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=6');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie6.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=7');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie7.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
						<?php
                 $req = $bdd->query('SELECT name FROM categories WHERE id=8');
                 while ($row = $req->fetch()) {?>
				     <a href="categorie8.php" class="stext-107 cl7 hov-cl1 trans-04">
						 <?php echo $row['name'] ?>
					 </a>
				   <?php } ?>	
					   </li>
					   
					    <li class="p-b-10">
				     <a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
					   Voir PLus
					 </a>	
					 </li>
               </div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						NOS COORDONNEES
					</h4>

					<p class="stext-107 cl7 size-201">
						Pour des questions suplémentaires, veuillez nous contacter au numero suivant:(+225) 07 77 29 93 21 
						ou visiter notre page facebook, twiter ou linkdin ci-dessous.
					</p>

					<div class="p-t-27">
						<a href="http://www.facebook.com/kone.gniennegninribienvenu" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<img src="./images/facebook.png" alt="Twitter" height="30" width="30">
						</a>

						<a href="http://www.twitter.com/kbienvenu263" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<img src="./images/twiter.png" alt="Twitter" height="30" width="30">
						</a>
						
                        <a href="https://www.linkedin.com/in/g-bienvenu-kon%C3%A9-49529b1bb?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bt8xagd4xTDiZmQfDJSQY6Q%3D%3D" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<img src="./images/linkdin.png" alt="linkdin" height="30" width="30">
						</a>
						
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="./handler/paypal.php" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="./handler/paypal.php" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="./handler/paypal.php" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="./handler/paypal.php" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="./handler/paypal.php" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droits réservés | Ce site ne peut être reproduire | K.G.B.@77
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
