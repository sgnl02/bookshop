<div class="form-group <?php if(isset($checkFields['error']['authorid'])) { echo 'has-warning'; } ?>">
	<label 
		for="addAuthorID" 
		class="
		<?php if(!isset($checkFields['error']['authorid'])) { echo 'hidden'; } ?>">Author</label>
	<input  
		class="form-control" 
		id="addAuthorID" 
		name="addAuthorID" 
		placeholder="Author" 
		value="<?php echo $checkFields['authorid']['value']; ?>"
	<?php if(empty($checkFields['error']['authorid'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
	>
</div>
