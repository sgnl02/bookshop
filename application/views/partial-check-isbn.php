<div class="form-group <?php if(isset($checkFields['error']['isbn'])) { echo 'has-warning'; } ?>">
	<label for="addISBN" class="control-label <?php if(!isset($checkFields['error']['isbn'])) { echo 'hidden'; } ?>">
	ISBN
	<?php if(!empty($checkFields['error']['isbn'])) { 
		echo "(" . $checkFields['error']['isbn'] . ")"; 
	} ?>
	</label>
	<input 
		class="form-control" 
		id="addISBN" 
		name="addISBN" 
		placeholder="ISBN" 
		value="<?php echo $checkFields['isbn']['value']; ?>"
	<?php if(!isset($checkFields['error']['isbn'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
	>
</div>
