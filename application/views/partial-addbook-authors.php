<?php
/*
 * $authorsArray;
 */
?>

<option value="<?php echo $authorsArray['id_author']; ?>">
<?php 
	echo $authorsArray['name']
	. " " 
	. $authorsArray['lastname']; 
?>
</option>
