<!DOCTYPE html>
<html>
<head>
	<title>Order List</title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
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
		#conf{
visibility: visible;
position: fixed;
height: 25%;
width: 60%;
background-color: #53c68c;
left: 20%;
border-radius: 5px;
top: 30%;
border:5px solid black;
display: flex;
justify-content: center;

}
#txt{
width: 100%;
text-align: center;
color: white;
position: absolute;
top: 16%;
}
#imm{
position: absolute;
height: 20%;
width: auto;
}
#pro2{
height: 20%;
width: 30%;
color: white;
top: 75%;
cursor: pointer;
border:none;
border-radius: 10px;
outline: none;
background-color: red;
position: absolute;
left: 60%;
}
#pro2:hover{
	background-color: #990000;
}
	</style>
</head>
<body>
	<div id="top">
<div id="pagename">
<h1>ORDER LIST</h1>
</div>
</div>
</div>
<div>
	<table id="div1">
		<tr id="head">
			<td width="4%">No</td>
			<td width="20%">Buyer</td>
			<td width="20%">Code</td>
			<td>Total Cost</td>
			<td>Shipment Date</td>
			<td>Order Date</td>
			<td>Items</td>
			<td>Status</td>
			<td width="3%"></td>
		</tr>
		<?php
		include("ordersession.php")
		 ?>
	</table>
</div>
	<?php
	$remarks = isset($_GET['remark']) ? $_GET['remark'] : '';
	if ($remarks=='success') {
	echo "<div id='conf'><img id='imm' src='Files/information.png'  alt='CAUTION!'><h3 id='txt'>ORDER PROCESSED SUCCESSFULLY<br></h3><button id='pro2' onclick='document.getElementById(\"conf\").style.visibility=\"hidden\"'>CANCEL</button></a></div>";
	}
	if ($remarks=='error') {
		$product = isset($_GET['product']) ? $_GET['product'] : '';
	echo "<div id='conf'><img id='imm' src='Files/information.png'  alt='CAUTION!'><h3 id='txt'>ERROR WHILE PROCESSING ORDER <br> $product OUT OF STOCK</h3><button id='pro2' onclick='document.getElementById(\"conf\").style.visibility=\"hidden\"'>CANCEL</button></a></div>";
	}
	 ?>
</body>
</html>
