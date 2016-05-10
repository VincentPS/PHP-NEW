<?php

	$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		$patient = NULL;
		if (isset($_GET['id'])) {
			// Get Patient for id
			
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from patients where id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		}
		
		if ($patient == NULL) {
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		}
		
		$query = "    SELECT * FROM clients
					  ORDER BY name ASC;";
		//client id uit CLIENT = verbonden met id uit client

        $result = $db->query($query);
        
        $clients = $result->fetch_all(MYSQLI_ASSOC);
        //------------------------
        $query = "    SELECT * FROM species
					  ORDER BY species ASC;";
                    

        $result = $db->query($query);
        
        $species = $result->fetch_all(MYSQLI_ASSOC);
	
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$speciesid = $db->escape_string($_POST["species_id"]);
		$status = $db->escape_string($_POST["status"]);
		$clientid = $db->escape_string($_POST["client_id"]);
		
		// Prepare query and execute
		$query = "update patients set name='$name', species_id='$speciesid', status='$status', clients_id='$clientid' where id=$id";
		$result = $db->query($query);
	
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	}
?>