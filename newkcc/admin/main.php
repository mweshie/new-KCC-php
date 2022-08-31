<?php
include ("authenticate.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Files/kcc logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New KCC Admin</title>
  <link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/fontawesome.css ">
	<script type="text/javascript" src="mainscript.js"></script>
	<script type="text/javascript" src="Files/jquery.min.js"></script>
	<script type="text/javascript" src="Files/bootstrap.min.js"></script>
	<script type="text/javascript" src="Files/all.min.js"></script>
	<script type="text/javascript" src="Files/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Files/style1.css ">
	<script type="text/javascript" src="mainscript.js"></script>
</head>
<body>

	<a href="logout.php" id="outlog">
		<button class="btn btn-info">LOG OUT</button>
	</a>
	<div id="sidepane" class="sidepane">
	<p href="javascript:void(0)" id="closebtn" onclick="closepane()">&times</p>
	<div class="logo">
	<img id="cykeslogo" style="width: 100%; left: 0px;" src="Files/kcc logo.jpg" class="cykeslogo">
	<div class="cykestitle" id="cykestitle"><p>NEW KCC ADMIN</p></div>
	</div>
	<div class="btnlist">
		<ul>
	<li href="javascript:void(0)" onclick="dash()"><i class="fa fa-tachometer-alt"></i><span id="bn"> Dashboard</span></li>
	<li href="javascript:void(0)" onclick="Orderlist()"><i class="fa fa-list"></i><span id="bn"> Order List</span></li>
	<li href="javascript:void(0)" onclick="Products()"><i class="fa fa-layer-group"></i> <span id="bn">Products</span></li>
	<li href="javascript:void(0)" onclick="Category()"><i class="fa fa-stream"></i> <span id="bn">Category</span></li>
	
	<li href="javascript:void(0)" onclick="Settings()"><i class="fa fa-cog"></i><span id="bn"> Settings</span></li>
	<li href="javascript:void(0)" onclick="About()"><i class="fa fa-address-card"></i><span id="bn"> About</span></li>
	</ul>
	</div>
	</div>
	</div>
	<div id="smallpane">
	<div class="logo2">
		<div id="openbtn"  href="javascript:void(0)" onclick="openpane()">+</div>
	</div>
	<p id="openn">Open</p>
	<div class="btnlist2">
		<ul>
	<li href="javascript:void(0)" onclick="dash()" ><i class="fa fa-tachometer-alt"></i></li>
	<li href="javascript:void(0)" onclick="Orderlist()"><i class="fa fa-list"></i></li>
	<li href="javascript:void(0)" onclick="Products()"><i class="fa fa-layer-group"></i></li>
	<li href="javascript:void(0)" onclick="Category()"><i class="fa fa-stream"></i></li>
	<li href="javascript:void(0)" onclick="Settings()"><i class="fa fa-cog"></i></li>
	<li href="javascript:void(0)" onclick="About()"s><i class="fa fa-address-card"></i></li>
	</ul>
	</div>
</div>

	<div id="sect">
	<iframe id="section" src="dashboard.php"></iframe>

</div>

</body>
</html>
