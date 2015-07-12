<div class="row">
	<div class="col-md-6">
		<h1>Add book</h1>

		<form action="../action/check/book" method="post">
		  <div class="form-group">
				<label for="addAuthorID">Author</label>
				<select class="form-control" id="addAuthorID" name="addAuthorID">
					<?php 
						foreach($authorsResultsArray as $authorsArray) {
							require 'partial-addbook-authors.php';
						}
					?>
				</select>
			</div>

			<input type="hidden" class="form-control" id="action" name="action" value="new">
			<div class="form-group">
				<label for="addTitle">Title</label>
				<input type="text" class="form-control" id="addTitle" name="addTitle" placeholder="Title">
			</div>
			<div class="form-group">
				<label for="addPublication">Publication date</label>
				<input type="text" class="form-control" id="addPublication" name="addPublication" placeholder="Publication (YYYY-MM-DD)">
			</div>
			<div class="form-group">
				<label for="addISBN">ISBN</label>
				<input type="text" class="form-control" id="addISBN" name="addISBN" placeholder="ISBN">
			</div>
			<div class="form-group">
				<label for="addPrice">Price</label>
				<input type="text" class="form-control" id="addPrice" name="addPrice" placeholder="Price">
			</div>
			<div class="form-group">
				<label for="addImage">Image</label>
				<input type="text" class="form-control" id="addImage" name="addImage" placeholder="Image">
			</div>
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span>
				Add book
			</button>
		</form>
	</div>
</div>
