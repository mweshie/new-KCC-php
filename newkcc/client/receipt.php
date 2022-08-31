<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

	table{
		
		border-collapse: collapse;
	}
	th , td{
	border: 1px solid green; 
	color:green;
	margin: 0px;
	padding: 0px;
	text-align:center;
	
	}
	#heade{
		position: fixed;
		margin-top: 0px;
		margin-right: 0px;
		text-align: center;
	}

</style>
</head>
<body>
<div id="header">
<h1>NEW KCC INVOICE</h1>
</div>
<div id="table">

<table style="width:100%;border:1px solid green;">
	<tr>
		
		<th>Product Name</th>
		<th>Category</th>
		
		<th>Unit Price</th>
		<th>Quantity</th>
		<th>Total Price</th>
	</tr>
	<?php 
	
	for ($i=0; $i < 120; $i++) { 
		echo'<tr>
			
			<td>Milk Powder</td>
			<td>Milk</td>
			
			<td>120</td>
			<td>3</td>
			<td>360</td>
		</tr>';
		
	}
	?>
</table>
</div>
</body>
</html>

