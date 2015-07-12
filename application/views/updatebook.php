<div class="row">
	<div class="col-md-12">
		<h1>Update book</h1>

		<?php if($updateBook === 'update') { 
			echo '<div class="alert alert-success" role="alert">Book is updated.</div>';
		} elseif($updateBook === 'error') { 
			echo '<div class="alert alert-danger" role="alert">Some kind of error happened.</div>';
		} ?>

	</div>
</div>
