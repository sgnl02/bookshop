<div class="row">
	<div class="col-md-12">
		<h1>There are some errors</h1>

		<?php var_dump($checkFields); ?>

		<form action="../action/add/book" method="post">
		  <div class="form-group">
				<label for="addAuthor">Author</label>
				<select class="form-control" id="addAuthor" name="addAuthor">
					<option name="<?php echo $checkFields['author']['value']; ?>"
					<?php if(empty($checkFields['author']['error'])) { echo "disabled"; } ?>
					><?php echo $checkFields['author']['value']; ?></option>
				</select>
			</div>

			<div class="form-group">
			<label for="addTitle">
				Title
				<?php if(!empty($checkFields['title']['error'])) { echo "(" . $checkFields['title']['error'] . ")"; } ?>
			</label>
			<input 
				type="text" 
				class="form-control" 
				id="addTitle" 
				name="addTitle" 
				placeholder="Title" 
				value="<?php echo $checkFields['title']['value']; ?>"
			<?php if(empty($checkFields['title']['error'])) { echo "disabled"; } ?>
			 >
		  </div>
		  <div class="form-group">
			<label for="addPublication">
				Publication
				<?php if(!empty($checkFields['publication']['error'])) { echo "(" . $checkFields['title']['error'] . ")"; } ?>
			</label>
			<input 
				type="text" 
				class="form-control" 
				id="addPublication" 
				name="addPublication" 
				placeholder="Publication" 
				value="<?php echo $checkFields['title']['value']; ?>"
			<?php if(empty($checkFields['title']['value'])) { echo "disabled"; } ?>
			>
			</div>
			<div class="form-group">
			<label for="addPrice">
			Price
			<?php if(!empty($checkFields['price']['error'])) { echo "(" . $checkFields['price']['error'] . ")"; } ?>
			</label>
			<input 
				type="text" 
				class="form-control" 
				id="addPrice" 
				name="addPrice" 
				placeholder="Price" 
				value="<?php echo $checkFields['price']['value']; ?>"
			<?php if(empty($checkFields['price']['value'])) { echo "disabled"; } ?>
			>
		  </div>
		  <button type="submit" class="btn btn-default">Add book</button>
		</form>

		<?php
		/*
		 * return array of error messages and with if-statements display the
		 * fields that need correction
		 */
		?>
	</div>
</div>
