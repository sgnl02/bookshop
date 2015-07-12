<div class="form-group <?php if(isset($checkFields['error']['publication'])) { echo 'has-warning'; } ?>">
	<label for="addPublication" class="control-label <?php if(!isset($checkFields['error']['publication'])) { echo 'hidden'; } ?>">
		Publication date
		<?php if(!empty($checkFields['error']['publication'])) { 
			echo "(" . $checkFields['error']['publication'] . ")"; 
		} ?>
	</label>
	<input 
		class="form-control" 
		id="addPublication" 
		name="addPublication" 
		placeholder="Publication (YYYY-MM-DD)" 
		value="<?php echo $checkFields['publication']['value']; ?>"
	<?php if(!isset($checkFields['error']['publication'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
	>
</div>
