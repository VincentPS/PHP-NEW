<?php
	$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			// Get client for id
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from clients where id=$id";
			$result = $db->query($query);
		
			$client = $result->fetch_assoc();		
		endif;
		if ($client == NULL):
			// No client found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
			$name = $db->escape_string($_POST["name"]);
			$phone = $db->escape_string($_POST["phone"]);
			$email = $db->escape_string($_POST["email"]);
			// Prepare query and execute
			$query = "DELETE FROM clients WHERE name='$name' AND phone='$phone' AND email='$email' AND id='$id'";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>