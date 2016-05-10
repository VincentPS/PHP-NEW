<?php
	$conn = new mysqli("localhost","root","","chat2");
	$add = $conn->prepare("INSERT INTO user (username, password, email) VALUE (?, ?, ?)");
	$data = array($_POST["username"], $_POST["password"], $_POST["email"]);
	if (isset($data)) {
		$add->bind_param("sss", $data[0], $data[1], $data[2]);
		$add->execute();
		echo "Your account has been registered!";
	}
	header('Location: html/home.php');
?>