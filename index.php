<!DOCTYPE html>
<?php
	session_start();
	
	
	$conn = new mysqli("localhost","root","","ecomm");
	
	if ($conn->connect_error){
		die("Connection failed: ".$$conn->connect_error);
	}
	
	$sql = "SELECT * FROM products WHERE counter>20 ORDER BY counter DESC";
	
	$result = $conn->query($sql);
	
	$conn->close();
?>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale-1">
		<title>ShopStation | Homepage</title>
		<link rel="stylesheet" href="indexstyle.css">
		<style>
		body{
			text-align: center;
		}</style>
	</head>
	
	<body>
		<div class="menu-bar" class="center">
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
		
		<div id="banner">
			<img src="images/banner1.jpg" alt="First slide" width=100%><br><br>
			<img src="images/banner2.jpg" alt="Second slide" width=100%><br><br>
			<img src="images/banner3.jpg" alt="Third slide" width=100%><br><br>
			<img src="images/banner4.jpg" alt="Fourth slide" width=100%><br><br>
			
		</div>
		<table border="1" class="center">
			<h1><b>Most Viewed</b></h1>
			<thead>				
				<th>Name</th>
				<th>Desc</th>
				<th>Price</th>
				<th>View</th>
				<th>Add To Cart</th>
			</thead>			
			
			<tbody>
				<?php
					if ($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "<tr>";
								echo "<td>".$row["name"]."</td>";
								echo "<td>".$row["description"]."</td>";
								echo "<td>".$row["price"]."</td>";
								echo "<td><img src='images/".$row["photo"]."' alt='' width='250' height='300'></td>";
								?>
								<td>
									<form action="cart_script.php" method="post" align="center">
										<input type="text" value='<?php echo $row["id"]; ?>' name="productid" hidden>
										<input type="text" value="4" name="userid" hidden>
										<input type="text" name="quantity" placeholder="qty">
										<input type="submit" name="submit">
									</form>
								</td>
								<?php
							echo "</tr>";
						}
					}else{
						echo "No Data Found";
					}
				?>
			</tbody>
		</table>
	</body>

</html>