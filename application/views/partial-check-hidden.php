<div class="form-group">
	<input 
		type="hidden" 
		class="form-control" 
		id="action" 
		name="action" 
		value="<?php echo $checkFields['action']; ?>">
	<?php 
	if(isset($checkFields['addidbook']) 
	&& !empty($checkFields['addidbook'])) {
		echo '<input 
			type="hidden" 
			class="form-control" 
			id="addIDBook" 
			name="addIDBook" 
			value="' . $checkFields['addidbook']['value'] .'">';
	} 
	?>
</div>
