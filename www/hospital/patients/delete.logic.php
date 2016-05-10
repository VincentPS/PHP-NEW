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
		$sp_id = $_GET['species'];
		
        $query = "    SELECT species FROM species 
					  WHERE id='$sp_id'
					  ORDER BY species ASC;";
                    

        $result = $db->query($query);
        
        $species = $result->fetch_assoc();
	
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['confirmed'])):
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
			$name = $db->escape_string($_POST["name"]);
	
			// Prepare query and execute
			$query = "DELETE FROM patients WHERE name='$name' AND id='$id'";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	}

?>