<form action="search" method="post">
  <div class="form-group">
    <label for="searchTitle">Title</label>
    <input type="text" class="form-control" id="searchTitle" name="searchTitle" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="searchAuthor">Author</label>
    <input type="text" class="form-control" id="searchAuthor" name="searchAuthor" placeholder="Author">
  </div>
  <div class="form-group">
    <label for="searchPublication">Publication</label>
    <input type="text" class="form-control" id="searchPublication" name="searchPublication" placeholder="Publication">
         <label>
			  <input type="radio" 
				id="searchPublicationBefore" name="searchPublicationChoice" value="before" checked>
           Before
         </label>
         <label>
			  <input type="radio" 
				id="searchPublicationAfter" name="searchPublicationChoice" value="after">
           After
         </label>
  </div>
  <div class="form-group">
    <label for="searchPrice">Price</label>
    <input type="text" class="form-control" id="searchPrice" name="searchPrice" placeholder="Price">
         <label>
			  <input type="radio" 
				id="searchPriceLessThan" 
				name="searchPriceChoice" value="less" checked>
           Less than
         </label>
         <label>
			  <input type="radio" 
				id="searchPriceGreaterThan" 
				name="searchPriceChoice" value="more">
           Greater than
         </label>
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
