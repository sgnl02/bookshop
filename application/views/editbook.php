<div class="row">
	<div class="col-md-6">
		<h1>Edit book</h1>

		<form action="../../action/check/book" method="post">
		  <div class="form-group">
				<label for="addAuthorID">Author</label>
				<select class="form-control" id="addAuthorID" name="addAuthorID">
					<option value="keep">Don't change author</option>
					<?php 
						foreach($authorsResultsArray as $authorsArray) {
							require 'partial-editbook-authors.php';
						}
					?>
				</select>
			</div>

		  <?php foreach($getBook as $book) { ?>
			 <input type="hidden" class="form-control" id="action" name="action" value="update">
		 	 <input type="hidden" class="form-control" id="addIDBook" name="addIDBook" value="<?php echo $book['id_book']; ?>">

			  <div class="form-group">
			    <label for="addTitle">Title</label>
				 <input 
					type="text" 
					class="form-control" 
					id="addTitle" 
					name="addTitle" 
					placeholder="Title" 
					value="<?php echo $book['title']; ?>"
				>
			  </div>
			  <div class="form-group">
				 <input 
					type="hidden" 
					class="form-control" 
					id="addISBN" 
					name="addISBN" 
					value="<?php echo $book['ISBN']; ?>">
			  </div>
			  <div class="form-group">
			    <label for="addPublication">Publication date</label>
				 <input 
					type="text" 
					class="form-control" 
					id="addPublication" 
					name="addPublication" 
					placeholder="Publication (YYYY-MM-DD)" 
					value="<?php echo $book['publication']; ?>">
			  </div>
			  <div class="form-group">
			    <label for="addPrice">Price</label>
			    <input 
					type="text" 
					class="form-control" 
					id="addPrice" 
					name="addPrice" 
					placeholder="Price (1.00)"
					value="<?php echo $book['price']; ?>">
			  </div>
			  <div class="form-group">
			    <label for="addImage">Image</label>
			    <input 
					type="text" 
					class="form-control" 
					id="addImage" 
					name="addImage" 
					placeholder="Image"
					value="<?php echo $book['image_url']; ?>">
			  </div>
		  <?php } ?>
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span>

				Update book
			</button>
		</form>
	</div>
</div>
