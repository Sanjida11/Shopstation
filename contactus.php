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
		<div class="container">
			<a><h1 style="text-align: center;"><strong>Contact Us</strong></h1>
			<p>&nbsp;</p>
			<p><strong>Name</strong>:</p>
			<table style="height: 37px; border-color: black;" border="1">
			<tbody>
			<tr style="height: 37px;">
			<td style="width: 259.2px; height: 37px;">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<p>&nbsp;</p>
			<p><strong>Email</strong>:</p>
			<table style="height: 37px; border-color: black;" border="1">
			<tbody>
			<tr>
			<td style="width: 288px; ; height: 37px;">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<p>&nbsp;</p>
			<p><strong>Message</strong>:</p>
			<table style="height: 85px; border-color: black;" border="1">
			<tbody>
			<tr>
			<td style="width: 400px;">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<p style="text-align: left;">&nbsp;</p>
			<p>&nbsp;</p>
			<table style="height: 44px; margin-left: 210px; background-color: #c7ea46;" width="138">
			<tbody style="padding-left: 60px;">
			<tr style="padding-left: 60px; height: 35.1px;">
			<td style="width: 128.8px; text-align: center; height: 35.1px;"><span style="color: #ff6600;"><strong>SEND MESSAGE</strong></span></td>
			</tr>
			</tbody>
			</table>
			</a>
        </div>
		
	</body>

</html>