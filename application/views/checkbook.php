<div class="row">
	<div class="col-md-6">
		<h1>Checking for errors</h1>

		<?php
			/*
			 * Hide the fields that are correct
			 */
		?>

		<?php if(isset($checkFields['error'])) { 
			echo '<div class="alert alert-danger" role="alert">There are ';
			echo count($checkFields['error'], COUNT_RECURSIVE);
			echo ' errors...</div>';
		} ?>

		<?php if(isset($checkFields['error'])) { 
			echo '<form action="../../action/check/book" method="post">';
		} else {
			echo '<form action="../../action/insert/book" method="post">';
		} ?>
		  <div class="form-group">
				<label for="addAuthorID" class="<?php if(!isset($checkFields['error']['authorid'])) { echo 'hidden'; } ?>">Author</label>
				<input  
					class="form-control" 
					id="addAuthorID" 
					name="addAuthorID" 
					placeholder="Author" 
					value="<?php echo $checkFields['authorid']['value']; ?>"
				<?php if(empty($checkFields['error']['authorid'])) { echo 'type="hidden"'; } else { echo 'type="input"'; } ?>
				>
			</div>

			<div class="form-group">
			<label for="addTitle" class="<?php if(!isset($checkFields['error']['title'])) { echo 'hidden'; } ?>">
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

		  <div class="form-group">
			<label for="addPublication" class="<?php if(!isset($checkFields['error']['publication'])) { echo 'hidden'; } ?>">
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

			<div class="form-group">
			<label for="addISBN" class="<?php if(!isset($checkFields['error']['isbn'])) { echo 'hidden'; } ?>">
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

			<div class="form-group">
			<label for="addImage" class="<?php if(!isset($checkFields['image']['error'])) { echo 'hidden'; } ?>">
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

			<div class="form-group">
			<label for="addPrice" class="<?php if(!isset($checkFields['error']['price'])) { echo 'hidden'; } ?>">
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
			
			<?php if(isset($checkFields['error'])) { 
				echo '<button type="submit" class="btn btn-primary">Check again</button>';
			} else {
				echo '
					<div class="alert alert-info" role="alert">No errors, click the button to continue...</div>
					
					<button type="submit" class="btn btn-primary">Add book</button>
				';
			} ?>

		</form>
		<?php
		/*
		 * return array of error messages and with if-statements display the
		 * fields that need correction
		 */
		?>
	</div>
</div>
