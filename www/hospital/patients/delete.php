<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete patient</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<input type="hidden" name="name" value="<?=$patient['name']?>">
			<label for="name">Name:</label>
			<span><?=$patient['name']?></span>
		</div>
		<div>
			<input type="hidden" name="species_id" value="<?=$patient['species_id']?>">
			<label for="name">Species:</label>
			<span><?=$species['species']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>