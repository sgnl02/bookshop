<div class="row">
	<div class="col-md-6">
		<h1>Checking for errors</h1>

		<?php if(isset($checkFields['error'])) { 
			echo '<div class="alert alert-danger" role="alert">There is/are ';
			echo count($checkFields['error'], COUNT_RECURSIVE);
			echo ' error(s)...</div>';
		} ?>

		<?php if(isset($checkFields['error'])) { 
			echo '<form action="../../action/check/book" method="post">';
		} elseif($checkFields['action'] === 'new') {
			echo '<form action="../../action/insert/book" method="post">';
		} elseif($checkFields['action'] === 'update') {
			echo '<form action="../../action/update/book" method="post">';
		}
		?>

			<?php require 'partial-check-hidden.php'; ?>
			<?php require 'partial-check-authorid.php'; ?>
			<?php require 'partial-check-title.php'; ?>
			<?php require 'partial-check-publication.php'; ?>
			<?php require 'partial-check-isbn.php'; ?>
			<?php require 'partial-check-image.php'; ?>
			<?php require 'partial-check-price.php'; ?>

			<?php if(isset($checkFields['error'])) { 
				echo '<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-refresh"></span>
					Check again
				</button>';
			} else {
				echo '<div class="alert alert-info" role="alert">No errors, click the button to continue...</div>';
			}
				
			if($checkFields['action'] === 'new' && !isset($checkFields['error'])) {
				echo '<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-save"></span>
					Add book
				</button>';
			} elseif($checkFields['action'] === 'update' && !isset($checkFields['error'])) {
				echo '<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-save"></span>
					Update book
				</button>';
			}
			?>
		</form>
	</div>
</div>
