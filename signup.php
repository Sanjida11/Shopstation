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
		<title>ShopStation | Sign Up</title>
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
		</div><br><br>
		
		<form action='signup_script.php' method="post" align="center">
			<input type="text" name="firstname" placeholder="First Name"><br>
			<input type="text" name="pass" placeholder="Last Name"><br>
			<input type="text" name="id" placeholder="Email"><br>
			<input type="password" name="pass" placeholder="Password"><br>
			<input type="submit" name="submit">
		</form>

		
	</body>

</html>