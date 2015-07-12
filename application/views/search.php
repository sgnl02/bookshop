<div class="row">
	<div class="col-md-4">
		<?php require 'partial-search.php'; ?>
	</div>

	<div class="col-md-8">
		<?php 
			foreach($searchResultsArray as $bookArray) {
				require 'partial-results-books.php';
			}
		?>
	</div>
</div>
