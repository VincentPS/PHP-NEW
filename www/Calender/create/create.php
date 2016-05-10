<?php
	require_once "create.logic.php";
?>
<head>
	<title>Toevoegen</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
</head>

<body>
	<h1>Nieuw</h1>

	<form method="post">
		<div class="naam">
			<label for="name">Naam</label>
			<input type="text" id="name" name="name">
		</div>

		<div class="dag">
			<label for="name">Dag</label>
				<select name="dag">
					<?php for ($x = 0; $x <= 31; $x++) { ?>
						<option value="<?= $x ?>"> <?= $x ?> </option>
					<?php } ?>
				</select>
		</div>

		<div class="maand">
			<label for="name">Maand</label>
				<select name="maand">
					<?php for ($y = 0; $y <= 12; $y++) { ?>
						<option value="<?= $y ?>"> <?= $y ?> </option>
					<?php } ?>
				</select>
		</div>

		<div class="jaar">
			<label for="name">Jaar</label>
				<select name="jaar">
					<?php for ($z = 1950; $z <= 2016; $z++) { ?>
						<option value="<?= $z ?>"> <?= $z ?> </option>
					<?php } ?>
				</select>
		</div>

		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
</body>
