<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$specie = $db->escape_string($_POST["species"]);
		
		// Prepare query and execute
		$query = "insert into species (species) values ('$specie')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
	
    exit();
	endif;

?>