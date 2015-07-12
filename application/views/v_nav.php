<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
				<a class="navbar-brand" href="
				 	<?php echo "http://" . preg_replace('/index.php/', '', $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']); ?>
				 ">Bookshop!</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
						  <a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
                <li>
						  <a href="<?php echo base_url('browse'); ?>"><span class="glyphicon glyphicon-search"></span> Browse Catalog</a>
                </li>
                <li>
						  <a href="<?php echo base_url('add/book'); ?>"><span class="glyphicon glyphicon-plus"></span> Add book</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
