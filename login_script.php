<?php
	session_start();
	$conn = new mysqli("localhost","root","","ecomm");
	
	if ($conn->connect_error){
		die("Connection failed: ".$$conn->connect_error);
	}
	
	@$id = $_POST['id'];
	@$pass = $_POST['pass'];
	@$submit = $_POST['submit'];
	
	$sql = "SELECT * FROM users WHERE email='$id'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0){
		$data = $result->fetch_assoc();
		if($data['password']==$pass){
			$_SESSION["Id"] = $data["id"];
			$_SESSION["Name"] = $data["firstname"];
			header("location: index.php");
		}else{
			echo '<script>alert("Wrong Id or Password. Please log in first")</script>';
		}
	}else{
		echo '<script>alert("Wrong Id or Password. Please log in first")</script>';
	}
	
	echo "<a href='login.php'>Log In</a>";
	
	$conn->close();
?>