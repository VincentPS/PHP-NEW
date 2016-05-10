<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patient</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
				<select name="species_id">
				<?php foreach($species as $specie): ?>
				
				<option value="<?=$specie['id']; ?>"> <?php echo  $specie['species'] ?> </option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="name">Client:</label>
			<select name="client_id">
				<?php foreach($clients as $client): ?>
				
				<option value="<?=$client['id']; ?>"> <?php echo  $client['name'] ?> </option>
				<?php endforeach; ?>
			</select>
			
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>