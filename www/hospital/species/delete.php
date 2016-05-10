<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete Species</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$specie['id']?>">
			<label for="soort">Species:</label>
			<span><?=$specie['species']?></span>
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