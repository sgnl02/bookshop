<form action="search" method="post">
  <div class="form-group">
    <label for="searchTitle">Title</label>
	 <input type="text" class="form-control" id="searchTitle" name="searchTitle" placeholder="Title" value="<?php echo $this->input->post('searchTitle'); ?>">
  </div>
  <div class="form-group">
    <label for="searchAuthor">Author</label>
    <input type="text" class="form-control" id="searchAuthor" name="searchAuthor" placeholder="Author" value="<?php echo $this->input->post('searchAuthor'); ?>">
  </div>
  <div class="form-group">
    <label for="searchPublication">Publication</label>
    <input type="text" class="form-control" id="searchPublication" name="searchPublication" placeholder="Publication" value="<?php echo $this->input->post('searchPublication'); ?>">
         <label>
			  <input type="radio" 
			  id="searchPublicationBefore" name="searchPublicationChoice" value="before" 
				<?php 
					if($this->input->post('searchPublicationChoice') === 'before') { echo "checked"; } 
					if($this->input->post('searchPublicationChoice') === 'before' xor 'after'){ echo "checked"; } 
				?>>
           Before
         </label>
         <label>
			  <input type="radio" 
				id="searchPublicationAfter" name="searchPublicationChoice" value="after" 
				<?php 
					if($this->input->post('searchPublicationChoice') === 'after') { echo "checked"; } 
				?>>
           After
         </label>
  </div>
  <div class="form-group">
    <label for="searchPrice">Price</label>
    <input type="text" class="form-control" id="searchPrice" name="searchPrice" placeholder="Price" value="<?php echo $this->input->post('searchPrice'); ?>">
         <label>
			  <input type="radio" 
				id="searchPriceLessThan" 
				name="searchPriceChoice" value="less" 
				<?php 
					if($this->input->post('searchPriceChoice') === 'less') { echo "checked"; } 
					if($this->input->post('searchPriceChoice') === 'less' xor 'more') { echo "checked"; } 
				?>>
           Less than
         </label>
         <label>
			  <input type="radio" 
				id="searchPriceGreaterThan" 
				name="searchPriceChoice" value="more" 
				<?php 
					if($this->input->post('searchPriceChoice') === 'more') { echo "checked"; } 
				?>>
           Greater than
		</label>
	</div>
	<button type="submit" class="btn btn-primary">
		<span class="glyphicon glyphicon-search"></span>
		Search
	</button>
</form>
