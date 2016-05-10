<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','calendar');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$day = $db->escape_string($_POST["dag"]);
		$month = $db->escape_string($_POST["maand"]);
		$year = $db->escape_string($_POST["jaar"]);

		
		// Prepare query and execute
		$query = "insert into birthdays (person, day, month, year) values ('$name','$day','$month','$year')";
		$result = $db->query($query);
    // Tell the browser to go back to the index page.
    header("Location: ../");
	
    exit();
	endif;

?>