<div class="form-group <?php if(isset($checkFields['error']['image'])) { echo 'has-warning'; } ?>">
	<label for="addImage" class="control-label <?php if(!isset($checkFields['image']['error'])) { echo 'hidden'; } ?>">
	Image
	<?php if(!empty($checkFields['image']['error'])) { 
		echo "(" . $checkFields['image']['error'] . ")"; 
	} ?>
	</label>
	<input 
		class="form-control" 
		id="addImage" 
		name="addImage" 
		placeholder="Image" 
		value="<?php echo $checkFields['image']['value']; ?>"
	<?php if(!isset($checkFields['image']['error'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
	>
</div>
