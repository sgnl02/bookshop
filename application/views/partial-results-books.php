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
			class="media-object image__placeholder" 
			data-src="<?php echo $bookArray['image_url']; ?>" 
			alt="Book cover for <?php echo $bookArray['title']; ?>"
			width="100" height="100">
	  </a>
	  <?php } else { ?>
		<div class="image__placeholder"><span class="sr-only">Book cover for <?php echo $bookArray['title']; ?></span></div>
	  <?php } ?>

	</div>
	<div class="media-body">
	<h4 class="media-heading"><?php echo $bookArray['title']; ?></h4>	
		<a href="edit/book/<?php echo $bookArray['id_book']; ?>" 
		class="btn btn-primary pull-right">
			<span class="glyphicon glyphicon-edit"></span>
			Edit
		</a>

		<p><em><?php echo $bookArray['lastname'] . ", 
		" . $bookArray['name']; ?></em></p>

		<p>Price: <strong>$<?php echo $bookArray['price']; ?></strong></p>
	</div>
</div>
