<div class="form-group <?php if(isset($checkFields['error']['title'])) { echo 'has-warning'; } ?>">
	<label for="addTitle" class="control-label <?php if(!isset($checkFields['error']['title'])) { echo 'hidden'; } ?>">
		Title
		<?php if(!empty($checkFields['error']['title'])) { 
			echo "(" . $checkFields['error']['title'] . ")"; 
		} ?>
	</label>
	<input 
		class="form-control" 
		id="addTitle" 
		name="addTitle" 
		placeholder="Title" 
		value="<?php echo $checkFields['title']['value']; ?>"
	<?php if(empty($checkFields['error']['title'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
	>
</div>
