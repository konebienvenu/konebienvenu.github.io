<!DOCTYPE html>
<html lang="en">
 <?php 
 session_start();
 include("handler/customersession.php");
 include("partials/head.php")
 ?>
<body class="animsition">
  <?php 
   include("partials/header.php")
  ?>
  
	<!-- breadcrumb --><br><br>
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Accueil
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Panier d'Achat
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head" cellspacing="20">
									<th class="column-1">Action</th>
									<th class="column-2">Nom</th>
									<th class="column-3">Prix</th>
									<th class="column-4">Quantité</th>
									<th class="column-5">Total</th>
								</tr>
                            <?php 
							  if(isset($_SESSION['cart'])){
							   $total=0;
							  foreach($_SESSION['cart'] as $key => $value){
							  $total= $total+$value['item_price']*$value['quantity'];
							   
							?>
								<tr class="table_row" cellspacing="20">
									<td class="column-1" align="left">
										<div class="">
										    <form method="POST" action="cartremove.php">
											<button class="btn btn-sm btn-outline-danger" name="remove">Supprimer</button>
											<input type="hidden" name="item_name" value ="<?php echo $value['item_name'] ?>">
											</form>
										</div>
									</td>
									<td class="column-2"><?php echo $value['item_name'] ?></td>
									<td class="column-3"><?php echo $value['item_price'] ?> fcfa</td>
									<td class="column-4">
									 <form method="POST" action="cartupdate.php">
									 
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input name="quantity" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $value['quantity']?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">
									   <button class="btn btn-sm btn-outline-danger" name="update">Voir le Total</button>
									   <input type="hidden" name="item_name" value ="<?php echo $value['item_name'] ?>">
							   </form>
									</td>
								</tr>
                          <?php }
						  } ?>
								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								
							</div>

						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Totaux des paniers
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
								  total:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo $total?> fcfa
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Exepédiant:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
                              Nous vous livrons n'importe ou par notre équipe operationnelle.
								</p>
								
								<div class="p-t-15">
								
                                   <form method="POST" action="handler/orderhandler.php">
									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Adresse">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="Numero de téléphone">
									</div>
																		<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="payment">
											<option value="Cash">Payer Cash à la livraison</option>
											<option value="Paypal">Payer par Paypal</option>
											<option value="Paypal">Payer par Orange money</option>
											<option value="Paypal">Payer par Mtn money</option>
											<option value="Paypal">Payer par Moov money </option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									<?php echo $total?> fcfa
								</span>
							</div>
						</div>
                         <input type="hidden" name="total" value="<?php echo $total ?>">
						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="placeorder" type="submit">
							Passer la commande
						</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php
	  include("partials/footer.php")
	?>
	
</body>
</html>