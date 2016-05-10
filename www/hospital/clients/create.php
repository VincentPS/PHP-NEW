<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New client</h1>
	<form method="post">
		<div>
			<label for="name">Naam:</label>
			<input type="text" id="naam" name="naam">
		</div>
		<div>
			<label for="name">Phone:</label>
			<input type="text" id="phone" name="phone">
		</div>
		<div>
			<label for="name">Email:</label>
			<textarea id="email" name="email"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>