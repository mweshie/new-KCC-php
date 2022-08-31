<?php 
include('db.php');
 $number=isset($_GET['value'])? $_GET['value'] : '';
 $result = mysqli_query($con,"SELECT * FROM Category WHERE No='$number'");
 $row = mysqli_fetch_array($result);
 $Name = $row['categoryname'];
 $image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$Name'");
 $row2 = $image->fetch_assoc();
 
 if ($row2 != null){
 	$imagepath=$row2['image'];
 }
 else{
 	$imagepath = "";
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
</head>
<link rel="stylesheet" type="text/css" href="Files/style.css">
<script type="text/javascript" src="mainscript.js"></script>
<style type="text/css">
	#profile{
		position: absolute;
			width: 60%;
			height: 34%;
			top: 7%;
			left: 1%;
			border-style: solid;
  			border-color: blue;
  			border-radius:20px 0px 0px 0px ;
		}
		#name{
			position: absolute;
			top: 7%;
			color: white;
			left: 6%;
		}
		#dp{
			position: absolute;
			top: 9%;
			left: 3%;
			height: 200px;
			width: 270px;
			box-shadow: black;
			justify-content: center;
			border-width: 5px;
		}
		#dp img{
			height: 90%;
			width: auto;
		}
		h1{
		 	position: absolute;
		 	top: 1px;
		 	left: 45%;
		 }
		#back img{
		 	background-color: white;
		 	padding:6px;
		 	border-radius: 20px;
		 	cursor: pointer;

		 }
		#details{
			text-transform: uppercase;
			position: absolute;
			top: 17%;
			left: 50%;
		}
		#details td{
			color: #660000;
			font-weight: 400;
		}
		
</style>
<body>
<div id="back">
<a href="Category.php"><img src="Files/left.png"></a>
</div>
</div>
<h1>EDIT CATEGORY</h1>
</div>
<div id="profile">
<div id="dp">
	<img src="<?php echo $imagepath ?>" alt="<?php echo $Name ?>">
</div>
<div id="details">
<table>
<tr><td><b>CATEGORY NAME: </b></td><td><?php echo $Name  ?></td></tr>
<tr><td><b>TYPE: </b></td><td><?php echo $row['Type'] ;?></td></tr>
<tr><td><b>LAST UPDATE: </b></td><td><?php echo $row['thedate'] ;?></td></tr>
</table>
</div>
</div>
</body>
</html>