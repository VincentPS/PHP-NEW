<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT `patients`.*, `clients`.name as cname, `species`.species
			  FROM `patients`
			  INNER JOIN `clients`
			  ON `patients`.clients_id = `clients`.id
			  INNER JOIN `species`
			  ON `patients`.species_id = `species`.id
			  ORDER BY name ASC;";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>