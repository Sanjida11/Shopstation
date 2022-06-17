<!DOCTYPE html>
<?php
	session_start();
	
	if(!isset($_SESSION["Id"])){
		header("location: login.php");
	}
	
	$conn = new mysqli("localhost","root","","ecomm");
	
	if ($conn->connect_error){
		die("Connection failed: ".$$conn->connect_error);
	}
	
	@$userid = $_SESSION["Id"];
	
	$sql = "SELECT * FROM cart,products WHERE cart.user_id='$userid' and products.id=cart.product_id";
	
	$result = $conn->query($sql);	
	
	$conn->close();
?>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale-1">
		<title>ShopStation | Cart</title>
		<link rel="stylesheet" href="indexstyle.css">
		<style>
		body{
			text-align: center;
		}</style>
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
		
		<h2> Welcome <?php echo $_SESSION["Name"]; ?></h2>
		
		<table border="1" class="center">			
			<thead>				
				<th>Name</th>
				<th>Desc</th>
				<th>Price</th>
				<th>View</th>			
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
							echo "</tr>";
						}
					}else{
						echo "Cart Empty";
					}
				?>
			</tbody>
		</table>
		
		<h3><a href="logout.php">Logout</a></h3>
		
	</body>

</html>