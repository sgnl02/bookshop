<?php
/*
 * $bookArray;
 */
?>
<div class="media">
	<div class="media-left media-middle">
	  <?php if(!empty($bookArray['image_url'])) { ?>
	  <a href="#">
			<img 
			class="media-object" 
			src="<?php echo $bookArray['image_url']; ?>" 
			alt="<?php echo $bookArray['title']; ?>"
			width="100" height="100">
	  </a>
	  <?php } else { ?>
			<img 
			class="media-object" 
			src="https://placeholdit.imgix.net/~text?txtsize=9&txt=100%C3%97100&w=100&h=100" 
			alt="<?php echo $bookArray['title']; ?>"
			width="100" height="100">
	  <?php } ?>

	</div>
	<div class="media-body">
	<h4 class="media-heading"><?php echo $bookArray['title']; ?></h4>	
		<a href="edit/<?php echo $bookArray['id_book']; ?>" 
		class="btn btn-primary pull-right">Edit</a>

		<p><em><?php echo $bookArray['lastname'] . ", 
		" . $bookArray['name']; ?></em></p>

		<p>Price: <strong>$<?php echo $bookArray['price']; ?></strong></p>
	</div>
</div>
