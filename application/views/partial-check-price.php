<div class="form-group <?php if(isset($checkFields['error']['price'])) { echo 'has-warning'; } ?>">
	<label for="addPrice" class="control-label <?php if(!isset($checkFields['error']['price'])) { echo 'hidden'; } ?>">
	Price
	<?php if(!empty($checkFields['error']['price'])) { 
		echo "(" . $checkFields['error']['price'] . ")"; 
	} ?>
	</label>
	<input 
		class="form-control" 
		id="addPrice" 
		name="addPrice" 
		placeholder="Price (0.99)" 
		value="<?php echo $checkFields['price']['value']; ?>"
	<?php if(!isset($checkFields['error']['price'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
	>
</div>
