<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete client</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<input type="hidden" name="name" value="<?=$client['name']?>">
			<label for="name">Naam:</label>
			<span><?=$client['name']?></span>
		</div>
		<div>
			<input type="hidden" name="phone" value="<?=$client['phone']?>">
			<label for="name">Phone:</label>
			<span><?=$client['phone']?></span>
		</div>
		<div>
			<input type="hidden" name="email" value="<?=$client['email']?>">
			<label for="name">Email:</label>
			<span><?=$client['email']?></span>
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