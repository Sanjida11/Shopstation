<!DOCTYPE html>
<?php
	session_start();
	$conn = new mysqli("localhost","root","","ecomm");
	
	if ($conn->connect_error){
		die("Connection failed: ".$$conn->connect_error);
	}
	
?>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale-1">
		<title>ShopStation | Homepage</title>
		<link rel="stylesheet" href="indexstyle.css">
	</head>
	
	<body>
		<div class="menu-bar">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Category
					<div class="sub-menu-bar">
						<ul>
							<li><a href="laptops.php">Laptops</a></li>
							<li><a href="desktop.php">Desktop PC</a></li>
							<li><a href="tablets.php">Tablets</a></li>
							<li><a href="phones.php">Smart Phones</a></li>
							<li><a href="mens.php">Men Collection</a></li>
							<li><a href="womens.php">Women Collection</a></li>
							<li><a href="babies.php">Baby Collection</a></li>
							<li><a href="grocery.php">Grocery Items</a></li>
							<li><a href="beauty.php">Beauty Products</a></li>
							<li><a href="ornaments.php">Ornaments</a></li>
							<li><a href="skincare.php">Skin Treatment Products</a></li>
						</ul>
					</div>
				</li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="login.php">Log In</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="cart.php">My Cart</a></li>
			</ul>
		</div>
		
		<div class="container" >
			<p>
			Welcome to ShopStation, your number one source for all necessities. We're dedicated to giving you the very best of products, with a focus on dependability, customer service and uniqueness.<br><br>

			Founded in 2015, ShopStation has come a long way from its beginnings in a home office. When the founders first started out, their passion for providing the best goods for their friends drove them to do intense research, and gave them the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over the world, and are thrilled to be a part of the fair trade wing of the online industry.<br><br>

			We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
			</p><br><br>
			<img src="images/banner1.png" alt="First slide" width=100%>			
		</div>
		
	</body>

</html>