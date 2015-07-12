<div class="row">
	<div class="col-md-12">
		<h1>Search results</h1>
	</div>

	<div class="col-md-4">
		<h2>Search</h2>
		<?php require 'partial-search.php'; ?>
	</div>

	<div class="col-md-8">
		<h2>Results</h2>
		<?php 
			if(empty($searchResultsArray)) {
				echo "No results...";
			} else {
				foreach($searchResultsArray as $bookArray) {
					require 'partial-results-books.php';
				}
			}
		?>
	</div>
</div>
