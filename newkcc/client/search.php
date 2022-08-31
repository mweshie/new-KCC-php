
<div id="search">
	<div class="d-flex flex-row" style="padding-left: 10px; width: 100%">
<button class="btn btn-sm btn-success p-1" id="closemenu" onclick="openmenu()" style="margin: 5px; height: 80%; width:30px; margin-right:15px; ">
	<i class="fa fa-bars"></i>
</button>
<div class="p-1" style="width:60%; height: 70%;">
	<form action="searchprod.php" method="POST" enctype="multipart/form-data">
		<div class="row">
	<input id="insearch" type="search" name="search" placeholder="Search Item..." class="col-9">
	<input id="insubmit" type="submit" name="submit" value="Search" class="btn btn-sm col-2">
</div>
	</form>
</div>
<button class="btn btn-sm btn-outline-danger position-relative p-1
" data-toggle="modal" data-target="#staticBackdropcart" style="margin: 5px; height: 80%; width:30px;">
	<i class='fa fa-shopping-cart'>
	</i>
	<span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger" style="color:white;">
		<?php 
		include('cart.php'); 
		echo $productsnumber;
		?>
	</span>
</button>
</div>
</div>
