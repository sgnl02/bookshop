<div class="row">
	<div class="col-md-12">
		<h1>Browse catalog</h1>
	</div>

	<div class="col-md-4">
		<h2>Search</h2>
		<?php require 'partial-search.php'; ?>
	</div>

	<div class="col-md-8">
		<h2>All our books</h2>
		<?php 
			foreach($allBooksArray as $bookArray) {
				require 'partial-results-books.php';
			}
		?>
	</div>
</div>
