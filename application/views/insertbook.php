<div class="row">
	<div class="col-md-12">
		<h1>Insert book</h1>

		<?php if($insertBook === 'new') { 
			echo '<div class="alert alert-success" role="alert">Book is added to the database.</div>';
		} elseif($insertBook === 'error') { 
			echo '<div class="alert alert-danger" role="alert">Book already exists or some other error occurred.</div>';
		} elseif($insertBook === 'errorISBN') { 
			echo '<div class="alert alert-danger" role="alert">ISBN already exists.</div>'; 
		} ?>

	</div>
</div>
