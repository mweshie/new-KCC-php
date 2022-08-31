<?php include("dashprodinfo.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<!--<link rel="stylesheet" type="text/css" href="Files/.min.css">-->

	<link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/fontawesome.css ">
	<script type="text/javascript" src="mainscript.js"></script>
	<script type="text/javascript" src="Files/jquery.min.js"></script>
	<script type="text/javascript" src="Files/bootstrap.min.js"></script>
	<script type="text/javascript" src="Files/all.min.js"></script>
	<script type="text/javascript" src="Files/popper.min.js"></script>
	<script type="text/javascript" src="mainscript.js"></script>
	<style type="text/css">
		#head2{
			color: white;
			margin-bottom: 1px;
			padding: 8px;
			font-size: 19px;
		}
		#dash0{
			height: 13%;
			width: 17%;
			margin:3px;
			background:repeating-linear-gradient(45deg,#002633,#00bfff 100%);
			color: white;
			border-radius: 10px;
			text-align: center;
			margin-bottom: 2px;
			padding: 8px;
			font-size: 19px;
			display: inline-block;
		}
		#dash0 p{
			font-size: 21px;
			margin: 10px;
			font-weight: 500;

		}
		#dash{
			height: 13%;
			width: 17%;
			margin:3px;
			background:repeating-linear-gradient(45deg,#330000,#ff9999 100%);
			color: white;
			border-radius: 10px;
			text-align: center;
			margin-bottom: 2px;
			padding: 8px;
			font-size: 19px;
			display: inline-block;
		}
		#dash:hover{
			background:repeating-linear-gradient(45deg,#ff9999,#330000 100%);
		}
		#dash0:hover{
			background:repeating-linear-gradient(45deg,#00bfff,#002633 100%);
		}
		#dash p{
			font-size: 21px;
			margin: 10px;
			font-weight: 500;
}
		#dash1{
			height: 13%;
			width: 30%;
			margin:3px;
			border-radius: 10px;
			text-align: center;
			margin-bottom: 2px;
			padding: 8px;
			font-size: 19px;
			display: inline-block;
		}
		#dash1 p{
			font-size: 21px;
			margin: 10px;
			font-weight: 500;

		}
		.wait{
			background: repeating-linear-gradient(45deg, #00004d,#6666ff 100%);
			color: white;
		}
		.wait:hover{
			background: repeating-linear-gradient(45deg,#6666ff, #00004d 100%);
		}
		.processed{
			background: repeating-linear-gradient(45deg, #001a00,#00b300 100%);
			color: black;
		}
		.processed:hover{
			background: repeating-linear-gradient(45deg,#00b300, #001a00 100%);
		}
		.totalorder{
			background: repeating-linear-gradient(45deg, #330026,#ff1ac6 100%);
			color: black;
		}
		.totalorder:hover{
			background: repeating-linear-gradient(45deg,#ff1ac6, #330026 100%);
		}
		#dash2{
			height: 13%;
			width: 17%;
			margin:3px;
			border-radius: 10px;
			text-align: center;
			margin-bottom: 2px;
			padding: 8px;
			font-size: 19px;
			display: inline-block;
		}
		#dash2 p{
			font-size: 21px;
			margin: 10px;
			font-weight: 500;
		}
		.publ{
			background: repeating-linear-gradient(45deg,#999900,#ffff66 100%);
			color: black;
		}
		.publ:hover, .unpubl:hover{
			background: repeating-linear-gradient(45deg,#ffff66,#999900 100%);
		}
		.unpubl{
			background:repeating-linear-gradient(45deg,#999900,#ffff66 100%);
			color: black;
		}
		.readystock{
			background:repeating-linear-gradient(45deg,#003311,#66ff99 100%);
			color: white;
		}
		.readystock:hover{
			background:repeating-linear-gradient(45deg,#66ff99,#003311 100%);
		}
		.outstock{
			background:repeating-linear-gradient(45deg,#660000,#ff3333 100%);
			color: white;
		}.outstock:hover{
			background:repeating-linear-gradient(45deg,#ff3333,#660000 100%);

		}
		.runout{
			background:repeating-linear-gradient(45deg,#00001a,#3333ff 100%);
			color: white;
		}
		.runout:hover{
			background:repeating-linear-gradient(45deg,#3333ff,#00001a 100%);
		}
	</style>
</head>
<body>
<div id='top'>
<div id="pagename">
<h1>DASHBOARD</h1>
</div>
</div>
</div>
<div class="container">
<div id="order" style=" background-color:#ff3399;">
	<fieldset style="height: 30%;">
	<legend id="head2">PRODUCT ORDER</legend>
	<div id="dashc">
	<div id="dash1" class="wait">Waiting <p><?php echo $waitingno; ?></p></div>
	<div id="dash1" class="processed">Processed <p><?php echo $processedno; ?></p></div>
	<div id="dash1" class="totalorder">Total Orders <p><?php echo $allno; ?></p></div>

</div>
</fieldset>
</div>
<div id="prodinfo" style=" background-color:#ff3399;">
	<fieldset>
	<legend id="head2">PRODUCT INFORMATION</legend>

	<div id="dashc">
	<div id="dash2" class="publ">Published<p><?php echo $num1 ?></p></div>
	<div id="dash2" class="unpubl">Unpublished<p><?php echo $numv ?></p></div>
	<div id="dash2" class="readystock">Ready Stock<p><?php echo $num2 ?></p></div>
	<div id="dash2" class="outstock">Out of Stock<p><?php echo $num4 ?></p></div>
	<div id="dash2" class="runout">Running Out<p><?php echo $num3 ?></p></div>
</div>
</fieldset>
</div>
<div id="catinfo" style=" background-color:#ff3399;">
	<fieldset>
	<legend id="head2">CATEGORY INFORMATION</legend>
<?php include("dashcatinfo.php") ?>
</fieldset>
</div>
</div>
</body>
</html>
