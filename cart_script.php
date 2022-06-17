<?php
	session_start();
	$conn = new mysqli("localhost","root","","ecomm");
	
	if ($conn->connect_error){
		die("Connection failed: ".$$conn->connect_error);
	}
	
	@$productid = $_POST['productid'];
	@$userid = $_SESSION["Id"];
	@$quantity = $_POST['quantity'];
	
	@$flag = FALSE;
	
	$sql = "INSERT INTO cart (user_id,product_id,quantity) VALUES ('$userid','$productid','$quantity')";
	
	$flag = $conn->query($sql);
	
	if ($flag){
		echo '<script>alert("Product Added To Your Cart")</script>';
	}else{
		echo '<script>alert("Something is wrong")</script>';
	}
	
	echo "\r\n<a href='index.php'>Home</a>";

	$conn->close();
?>