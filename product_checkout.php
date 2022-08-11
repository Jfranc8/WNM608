<?php

include_once "lib/php/functions.php";
$cart = getCartItems();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<h2>Product Checkout</h2>

					<form class="form">
						<h3>Address</h3>
						<div class="form-control">
							<label for="address-street" class="form-label">Street</label>
							<input id="address-street" type="text" placeholder="Street name" class="form-input">
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="address-street" class="form-label">City</label>
									<input id="address-street" type="text" placeholder="City" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="address-street" class="form-label">State</label>
									<input id="address-street" type="text" placeholder="State" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="address-street" class="form-label">Zip Code</label>
									<input id="address-street" type="text" placeholder="Zip Code" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="address-street" class="form-label">Country</label>
									<input id="address-street" type="text" placeholder="Country" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<input type="submit" class="form-button" value="Submit">
						</div>
					</form>

					<form class="form">
						<h3>Payment</h3>
						<div class="form-control">
							<label for="payment-name" class="form-label">Full Name</label>
							<input id="payment-name" type="text" placeholder="Name" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
									<label for="payment-number" class="form-label">Card Number</label>
									<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
								</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="payment-expiration" class="form-label">Expiration</label>
									<input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="payment-cvv" class="form-label">CVV</label>
									<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<label for="payment-zip" class="form-label">Zip code</label>
							<input id="payment-zip" type="text" placeholder="Zip code" class="form-input">
						</div>
						<div class="form-control">
							<!-- <input type="submit" class="form-button" value="Submit"> -->
							<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2>Artwork Review</h2>
					<?php array_reduce($cart,function($r,$o){
						$totalfixed = number_format($o->total,2,'.','');
						return "<div class='display-flex'>
							<div class='flex-stretch'>$o->name</div>
							<div class='flex-none'>&dollar;$totalfixed</div>
						</div>";
					})
					 ?>
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>
