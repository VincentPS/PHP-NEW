<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="naam">Naam:</label>
			<input type="text" id="naam" name="naam" value="<?=$client['name']?>">
		</div>
		<div>
			<label for="naam">phone:</label>
			<input type="text" id="phone" name="phone" value="<?=$client['phone']?>">
		</div>
		<div>
			<label for="naam">email:</label>
			<textarea id="email" name="email"><?=$client['email']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>