<?php
	$conn = new mysqli("localhost","root","","chat2");
?>


<!DOCTYPE html>

<html>
	<head>
		<title>Chack O</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
	</head>

	
	<body>
		
		<div class="inloggen">
			<h1>Welcome</h1>
			<form action="register.php" method="post" class="register_form">
				Username:<input type="text" id="username" name="username" value=""></br>
				Password:<input type="password" id="password" name="password" value="" class="password_input"></br>
				Email:<input type="email" id="email" name="email" value="" class="email_input"></br>
						 <input type="submit" id="submit" name="submit" value="Register">
			
			</form>
		</div>
		
		<div class="anonymous">
			<button type="button" class="connect_anon">Connect Anonymously!</button>
		</div>
		
	</body>
	
</html>