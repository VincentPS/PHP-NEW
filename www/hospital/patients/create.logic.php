<?php

	$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$soort = $db->escape_string($_POST["species_id"]);
		$status = $db->escape_string($_POST["status"]);
		$client = $db->escape_string($_POST["client_id"]);
		
		// Prepare query and execute
		$query = "insert into patients (name, species_id, status, clients_id) values ('$name',$soort,'$status',$client)";
		$result = $db->query($query);
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
		
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
		
	}

?>