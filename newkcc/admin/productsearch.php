
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<script type="text/javascript" src="mainscript.js"></script>
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/fontawesome.css ">
	<script type="text/javascript" src="Files/jquery.min.js"></script>
	<script type="text/javascript" src="Files/bootstrap.min.js"></script>
	<script type="text/javascript" src="Files/all.min.js"></script>
	<script type="text/javascript" src="Files/popper.min.js"></script>
	<script type="text/javascript">
	function addproduct(){
		var add = document.getElementById("new");
		add.style.display="block"
	}
	function cancel(){
		var add = document.getElementById("new");
		add.style.display="none"
	}
</script>
</head>
<style type="text/css">
#new{
		display: none;
		z-index: 2;
		top: 7%;
		left: 10%;
		overflow: hidden;
		position: absolute;
		width: 80%;
		transition: 1s;
		height: 85%;
		align-self:center;
		background-color: #00a97e;
		transition: 1s;
		font-family: "Times New Roman", Times, serif;
		box-shadow: 0 10px 20px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
	}
	#new #ads{
		left: 30%;
		text-align: center;
		color: white;
		font-weight: 600;
		font-size: 20px;
	}
	#new #first{
		position: absolute;
		display: block;
		width: 260px;
		margin-left: 15%;

	}
	#new #second{
		position: all;
		top: 3%;
		display: block;
		width: 260px;
		margin-left: 55%;
	}

	#new label span{
		font-size: 14px;
		font-weight: 600;
		color: #660000;
		text-transform: uppercase;
	}

	#new #first input{
		display: block;
		margin-top: 5px;
		font-size: 16px;
		padding-bottom: 5px;
		margin-bottom: 9px;
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		border: none;
		outline: none;
		border-bottom: 1px solid #660000;
		background:transparent;
	}
	#new #forth{
		display: block;
		margin-top: 5px;
		font-size: 16px;
		padding-bottom: 5px;
		left: 55%;
		top: 34%;
		margin-bottom: 5px;
		position: absolute;
		font-family: "Times New Roman", Times, serif;
		border: none;
		outline: none;
		background:transparent;
	}

	#new #second input{
		display: block;
		margin-top: 5px;
		font-size: 16px;
		margin-bottom: 9px;
		padding-bottom: 5px;
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		border: none;
		outline: none;
		border-bottom: 1px solid #660000;
		background:transparent;
	}
	#p{
		left: 5%;
	}
	#new #fifth input{
		display: block;
		width: 100%;
		color: white;
		font-size: 16px;
		text-align: center;
		font-family: "Times New Roman", Times, serif;
		border: none;
		outline: none;
		border-color: transparent;
		background:transparent;
	}

	#new #fifth{
		position: absolute;
		top: 90%;
		width: 11%;
		left: 55%;
		border:none;
		outline: none;
		padding:7px;
		justify-content: center;
		background-color: #660000;
		border-radius: 10px;
	}
	#new #fifth:hover{
		background-color: red;
	}
	#but{
		position: absolute;
		top: 90%;
		width: 12%;
		left: 35%;
		color: white;
		font-size: 16px;
		font-family: "Times New Roman", Times, serif;
		border:none;
		outline: none;
		padding:8px;
		justify-content: center;
		background-color: #660000;
		border-radius: 10px;
	}
	#but:hover{
		background-color: red;
	}
	.menu1{
		position: absolute;
		background-color: red;
		right: 3%;
		width: 20%;
		z-index: 7;
	}
	#ready{
		background-color: green;
		color: white;
	}
	#outs{
		background-color: red;
		color: white;
	}
	#almost{
		background-color: blue;
		color: white;
	}
	#edit img{
		cursor: pointer;
		margin-right: 5px;
		margin-left: 5px;
		height: 12px;
		width: 12px;

	}
	#new #second #image{
		display: block;
		margin-top: 5px;
		font-size: 16px;
		padding-bottom: 5px;
		margin-bottom: 5px;
		font-family: "Times New Roman", Times, serif;
		border: none;
		outline: none;
		background:transparent;
	}
	#search{
		position: absolute;
		top: 2%;
		right: 40%;

	}
	#search #put{
		background-color:transparent;
		color: white;
		height: 27px;
		width:350px;
		margin-right: -4px;
		outline: none;
		border-radius: 10px 0 0 10px;
			border: 1px solid #660000;

	}
	#search #ser{
		color:white;
		background-color: #660000;
		height: 27px;
		outline: none;
		margin-left: 0px;
			border:none;
			border-radius: 0px 10px 10px 0px;

	}
	#desc{
		position: absolute;
		width: 80%;
		height: 30%;
	}
	#desc textarea{
		height: auto;
		width: auto;
		background-color: transparent;
		outline: none;
		border: 2px solid #660000;
	}
	.prdel{
		display: none;
		position: fixed;
		height: 100px;
		width: 300px;
		border:5px solid black;
		background-color: #003333;
		left: 38%;
		top: 30%;
	}
	.prdel p{
		color: white;
		width: 100%;
		top: 1%;
		text-align: center;
		font-size: 17px;
	}
	.prdel #yes{
		width: 35%;
		left: 10%;
		height: 20px;
		position: absolute;
		background-color: red;
		border:none;
		color: white;
		outline: none;
	}
	.prdel #no{
		width: 35%;
		left: 55%;
		height: 20px;
		color: white;
		position: absolute;
		background-color: blue;
		border:none;
		outline: none;
	}
</style>
<body>
	<div id="top">
		<div class="container">
<div id="pagename">
<h1>PRODUCTS</h1>
</div>
<div id="search">
	<form action="productsearch.php" method="POST">
		<input id="put" type="search" name="search" placeholder="Search Product..." required="">
		<input id="ser" type="submit" value="SEARCH">
	</form>
</div>
<div class="dots" href="javascript:void(0)" onclick="addproduct()" >
	<img src="Files/dots.png">
</div>
</div>
<div>
	<table id="div1">
		<tr id="head">
			<td width="4%">No</td>
			<td width="30%">Name</td>
			<td>Type</td>
			<td>Price</td>
			<td>Stock</td>
			<td>Status</td>
			<td>Update</td>
			<td width="auto">Action</td>
		</tr>
<?php
include('db.php');
$search = $_POST['search'];
$query = "SELECT * from products where Name LIKE '%$search%'";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);
$x=1;
if ($count == 0){
		echo "<p id='none'>Product '$search' Does No Exist!</p>";
	}
for($count > 0;$count--;) {
    $row = mysqli_fetch_array($results);
	$number=$row['No'];
	$name=$row['Name'];
	$category=$row['Category'];
	$type=$row['Type'];
	$price=$row['Price'];
	$stock=$row['Stock'];
	$status=$row['Status'];
	$time=$row['thedate'];
	if ($stock > 50 ) {
		echo "<tr><td>$x</td></td><td>$name</td><td>$type</td><td>$price</td><td>$stock</td><td id='ready'>READY ON STOCK</td><td>$time</td><td id='edit'><a href='javascript:void(0)' onclick='document.getElementById(\"pr$number\").style.display = \"block\"'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-alt'></i></button></a><a href='editprod.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button></a></td></tr><div id='pr$number' class='prdel'><p>Confirm<br>Want To Delete $name ?</p><a href='deleteprod.php?value=$number'><button id='yes'>Yes</button></a><button id='no' onclick='document.getElementById(\"pr$number\").style.display = \"none\"'>No</button></div>";
	}
	elseif ($stock <= 50 && $stock > 0) {
		echo  "<tr><td>$x</td></td><td>$name</td><td>$type</td><td>$price</td><td>$stock</td><td id='almost'>RUNNING OUT</td><td>$time</td><td id='edit'><a href='javascript:void(0)' onclick='document.getElementById(\"pr$number\").style.display = \"block\"'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-alt'></i></button></a><a href='editprod.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button></a></td></tr><div id='pr$number' class='prdel'><p>Confirm<br>Want To Delete $name ?</p><a href='deleteprod.php?value=$number'><button id='yes'>Yes</button></a><button id='no' onclick='document.getElementById(\"pr$number\").style.display = \"none\"'>No</button></div>";
	}
	elseif ($stock == 0 or $stock < 0 ) {
		echo "<tr><td>$x</td></td><td>$name</td><td>$type</td><td>$price</td><td>$stock</td><td id='outs'>OUT OF STOCK</td><td>$time</td><td id='edit'><a href='javascript:void(0)' onclick='document.getElementById(\"pr$number\").style.display = \"block\"'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-alt'></i></button></a><a href='editprod.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button></a></td></tr><div id='pr$number' class='prdel'><p>Confirm<br>Want To Delete $name ?</p><a href='deleteprod.php?value=$number'><button id='yes'>Yes</button></a><button id='no' onclick='document.getElementById(\"pr$number\").style.display = \"none\"'>No</button></div>";
	}
	$x++;
    }

?>
</table>
</div>
<div id="mun" class="menu1">

</div>
<div class="new" id="new">
	<p id="ads">ADD PRODUCT</p>
	<div id="here">
	<form action="adddprod.php" method="POST" enctype="multipart/form-data">
		<div id="first">
			<label>
			<span>Product Name</span>
			<input type="text" name="name" required="">
			</label>
			<label>
			<span>Price</span>
			<input type="number" name="price" required="">
			</label>
			<label>
			<span>Stock</span>
			<input type="number" name="stock" required="">
			<label>
			<span>Category</span>
			<input list="categories" name="category" required="">
			<datalist id="categories">
				<?php include('catsession.php') ?>
			</datalist>

		</label>
		</div>
		<div id="second">
			<label>
			<span>Type</span>
			<input list="type" name="type" required="">
			<datalist id="type">
				<option>PUBLISHED</option>
				<option>UNPUBLISHED</option>
			</datalist>
			</label>
			<label>
			<span>Discount</span>
			<input type="number" name="discount" required="">
			</label>
			<label>
			<span>Product Status</span>
			<input list="status" name="status" required="">
			<datalist id="status">
				<option>READY ON STOCK</option>
				<option>OUT OF STOCK</option>
				<option>RUNNING OUT</option>
			</datalist>
			</label>
			<label>
			<span>Upload Image</span><br><br>
			<input type="file" name="fileToUpload" id="image" required="">
			</label>
		</div>


	<div id="fifth">

		<input type="submit" name="submit" value="SAVE">
	</div>
	</form>
</div>
	<button id="but" onclick="cancel()">CANCEL</button>
</div>
</div>
</body>
</html>
