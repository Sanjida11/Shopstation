<?php
	session_start();
	$conn = new mysqli("localhost","root","","ecomm");
	
	if ($conn->connect_error){
		die("Connection failed: ".$$conn->connect_error);
	}
	
	@$firstname = $_POST['firstname'];
	@$lastname = $_POST['lastname'];
	@$id = $_POST['id'];
	@$pass = $_POST['pass'];
	@$submit = $_POST['submit'];
	
	@$flag = FALSE;
	
	$sql = "INSERT INTO users (email, password, firstname,lastname) VALUES ('$id','$pass','$firstname','$lastname')";
	
	$flag = $conn->query($sql);
	
	if ($flag){
		echo "Welcome to ShopStation Family";
	}else{
		echo "Error";
	}
	
	echo "\r\n<a href='index.php'>Home</a>";

	$conn->close();
?>