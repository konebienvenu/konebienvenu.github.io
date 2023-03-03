<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Acheter via PayPal</title>
</head>
<body>
<!-- Le conteneur des boutons PayPal -->
<div id="paypal-boutons"></div>

<!-- 1. Importation de la SDK JavaScript PayPal -->
<script src="https://www.paypal.com/sdk/js?client-id=AUSYcIA7SIHFs9_HQdF9BRezbp_gQY6_5y8-T8bUuad0IVofzCWKi3Hho5a_iz7IsXpOy1XiUqztPW15"></script>
<script>
	// 2. Afficher le bouton PayPal
	paypal.Buttons({

		// 3. Configurer la transaction
		createOrder : function (data, actions) {

			// Les produits à payer avec leurs details
			var produits = [
				{
					name : "Produit 1",
					description : "Description du produit 1",
					quantity : 1,
					unit_amount : { value : <?php echo $_SESSION['total']?>, currency_code : "USD" }
				}
			];

			// Le total des produits
			var total_amount = produits.reduce(function (total, product) {
				return total + product.unit_amount.value;
			}, 0);

			// La transaction
			return actions.order.create({
				purchase_units : [{
					items : produits,
					amount : {
						value : total_amount,
						currency_code : "USD",
						breakdown : {
							item_total : { value : <?php echo $_SESSION['total']?>, currency_code : "USD" }
						}
					}
				}]
			});
		},

		// 4. Capturer la transaction après l'approbation de l'utilisateur
		onApprove : function (data, actions) {
			return actions.order.capture().then(function(details) {

				// Afficher Les details de la transaction dans la console
				console.log(details);

				// On affiche un message de succès
				alert(details.payer.name.given_name + ' ' + details.payer.name.surname + ', votre transaction est effectuée. Vous allez recevoir une notification très bientôt lorsque nous validons votre paiement.');

			});
		},

		// 5. Annuler la transaction
		onCancel : function (data) {
			alert("Transaction annulée !");
		}

	}).render("#paypal-boutons");

</script>
</body>
</html>