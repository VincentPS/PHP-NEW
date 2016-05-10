<?php
	$db = new mysqli('localhost','root','','calendar');
	$query = "SELECT * from birthdays ORDER BY month, day, year";

	$result = $db->query($query);
	$birthdays = $result->fetch_all(MYSQLI_ASSOC);

	$months = array(1 => 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'October', 'November', 'December');
	$oldmonth = null;
	$oldday = null;
	$day = null;
?>


<!doctype html>
<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="css/main.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php foreach ($birthdays as $birthday) { ?>
		<?php if(!($birthday['month'] == $oldmonth)) { ?>
		<h1><?=$months[$birthday['month']]?></h1>
		<?php $oldday = null;} ?>

		<?php if(!($birthday['day'] == $oldday)) { ?>
		<h2><?=$birthday['day']?></h2>
		<?php } ?>
			<p class="personen"><?=$birthday['person']?> (<?=$birthday['year']?>)<a href="delete.php"> x</a></p>
		<?php $oldmonth = $birthday['month'];
			  $oldday = $birthday['day']; } ?>
			<p class="invoegenBox"><a href="create/create.php">+ Toevoegen</a></p>

	</body>
</html>
