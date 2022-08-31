<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
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
	function addcat(){
		var add = document.getElementById("new");
		add.style.display="block"
	}
	function cancelcat(){
		var add = document.getElementById("new");
		add.style.display="none"
	}
</script>
	<style type="text/css">
		#new{
		  display: none;
		  z-index: 2;
		  top: 7%;
		  left: 30%;
		  overflow: hidden;
		  position: absolute;
		  width: 40%;
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
			position: absolute;
			color: white;
			font-weight: 600;
			font-size: 20px;
		}
		#new #first{
			position: absolute;
		  display: block;
		  width: 260px;
		  top: 15%;
		  margin-left: 28%;

		}
		#new #second{
			position: all;
		  top: 3%;
		  display: block;
		  width: 260px;
		  margin-left: 55%;
		}
		#new #third{
			position: absolute;
		  top: 35%;
		  display: block;
		  width: 260px;
		  margin-left: 15%;
		}

		#new label span{
		  font-size: 14px;
		  font-weight: 600;
		  color: #660000;
		  text-transform: uppercase;
		}
		#photo img{
			height: 20px;
			width: auto;

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
		#new #first .image{
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

		#new #second input{
		  display: block;
		  margin-top: 5px;
		  font-size: 16px;
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
		  width: 18%;
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
		  width: 20%;
		  left: 30%;
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
		#edit img{
			cursor: pointer;
			margin-right: 5px;
			margin-left: 5px;
			height: 12px;
			width: 12px;

		}
	</style>
</head>
<body>

	<div id="top">
		<div class="container">
<div id="pagename">
<h1>CATEGORY</h1>
</div>
<div class="dots" href="javascript:void(0)" onclick="addcat()">
	<img src="Files/dots.png">
</div>
</div>
<div>
	<table id="div1">
		<tr id="head">
			<td width="4%">No</td>
			<td>Image</td>
			<td width="45%">Name</td>
			<td>Type</td>
			<td>Update</td>
			<td width="auto">Action</td>
		</tr>
		<?php include('catsession2.php') ?>
	</table>
</div>
<div class="new" id="new">
	<p id="ads">ADD CATEGORY</p>
	<form action="addcategory.php" method="POST" enctype="multipart/form-data">
	<div id="first">
			<label>
			<span>Category Name</span>
			<input type="text" name="catname" required="">
			</label>
			<label>
			<span>Type</span>
			<input list="type" name="cattype" required="">
			<datalist id="type">
				<option>published</option>
				<option>unpublished</option>
			</datalist>
			</label>
			<label>
			<span>Upload Image</span><br><br>
			<input type="file" name="fileToUpload" id="fileToUpload" class="image">
			</label>
	</div>

	<div id="fifth">

		<input type="submit" name="submit" value="SAVE">
	</div>
	</form>
	<button id="but" onclick="cancelcat()">CANCEL</button>
</div>
</div>
</body>
</html>
