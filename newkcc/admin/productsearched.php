
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<script type="text/javascript" src="mainscript.js"></script>
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
			top: 1%;
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
</style>
<body>
	<div id="top">
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
			<td width="5%">Action</td>
		</tr>
		<!--<?php 
		include('productsearch.php');
		?>-->
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

</body>
</html>