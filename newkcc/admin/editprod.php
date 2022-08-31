<?php 
include('db.php');
 $number=isset($_GET['value'])? $_GET['value'] : '';
 $result = mysqli_query($con,"SELECT * FROM Products WHERE No='$number'");
 $row = mysqli_fetch_array($result);
 $Name = $row['Name'];
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
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<script type="text/javascript" src="mainscript.js"></script>
	<style type="text/css">
		#editor{
			 position: absolute;
			 top: 7%;
			 left: 2%;
			 height: 30%;
			 width: 60%;
			 border-style: solid;
  			 border-color: blue;
  			 border-radius: 20px 0px 0px 0px;
		}
		#dp{
			position: absolute;
			top: 10%;
			left: 3%;
			height: 180px;
			width: 250px;
			box-shadow: black;
			justify-content: center;
			border-width: 5px;
		}
		#dp img{
			height: 90%;
			width: auto;
		}
		#details{
			position: absolute;
			top: 13%;
			left: 50%;
		}
		#details td{
			color: #660000;
			font-weight: 400;
		}
		#restock{
			 position: absolute;
			 top: 40%;
			 left: 2%;
			 height: 57%;
			 width: 60%;
			 border-style: solid;
  			 border-color: blue;
  			 border-radius:0px 0px 0px 20px;
		}
		#other{
			 position: absolute;
			 top: 7%;
			 left: 64%;
			 height: 90%;
			 width: 34%;
			 border-style: solid;
  			 border-color: blue;
  			 border-radius: 0px 20px 20px 0px;
		}
		#restock #inner{
			margin-left: 3%;
		}

		#restock span{
		  font-size: 14px;
		  font-weight: 600;
		  color: #660000;
		  text-transform: uppercase;
		}
		#restock label span{
		  font-size: 14px;
		  font-weight: 600;
		  color: #660000;
		  text-transform: uppercase;
		}
		#restock label input{
		  display: block;
		  margin-top: 5px;
		  font-size: 16px;
		  padding-bottom: 5px;
		  margin-bottom: 9px;
		  text-align: center;
		  font-family: "Times New Roman", Times, serif; 
		  border: none;
		  outline: none;
		  color: red;
		  font-weight: 600;
		  border-bottom: 1px solid #660000;
		  background:transparent;
		}
		#sub{
			position: absolute;
			right: 4%;
			width: 70px;
			bottom: 5%;
			padding: 3px;
			border-radius: 7px;
			color: white;
			background-color: #660000;
			border-color: transparent;
		}
		#sub:hover{
			background-color: red;
		}
		 #comment{
		 	position: absolute;
		 	top: 10%;
		 	right: 3%;
		 	padding: 5px;
		 	border-radius: 7px;
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
		 #inner{
		 	position: absolute;
		 	top: 14%;
		 	left: 7%;
		 }
	</style>
</head>
<div id="back">
<a href="Products.php"><img src="Files/left.png"></a>
</div>
<h1>EDIT PRODUCT</h1>
</div>
<body>
	<div id="editor">
	<div id="dp">
		<img src="<?php echo $imagepath ?>" alt="<?php echo $Name ?>">
	</div>
	<div id="details">
		<table>
<tr><td><b>PRODUCT NAME: </b></td><td><?php echo $row['Name'] ;?></td></tr>
<tr><td><b>PRODUCT CATEGORY: </b></td><td><?php echo $row['Category'] ;?></td></tr>
<tr><td><b>STOCK: </b></td><td><?php echo $row['Stock'] ;?></td></tr>
<tr><td><b>TYPE: </b></td><td><?php echo $row['Type'] ;?></td></tr>
<tr><td><b>PRODUCT PRICE: </b></td><td><?php echo $row['Price'] ;?></td></tr>
<tr><td><b>LAST UPDATE: </b></td><td><?php echo $row['thedate'] ;?></td></tr>
</table>
</div>
</div>
<?php 
if ($row['Stock'] > 50) {
	$comment = "<p  id='comment' style='background-color:green; color:white;'>RESTOCKING NOT NECESSARY!</p>";
}
elseif ($row['Stock'] <= 50 && $row['Stock'] > 0) {
	$comment = "<p  id='comment' style='background-color:blue; color:white;'>RESTOCKING NEEDED!<p>";
}
elseif($row['Stock'] == 0 or $row['Stock'] < 0){
	$comment = "<p  id='comment' style='background-color:red; color:white;'>RESTOCKING NEEDED URGENTLY!!</p>";
}
?>

<div id="restock">
	<h1 style="text-align: center; color: blue">RESTOCK</h1>
	<span><?php echo $comment;  ?></span>
	<div id="inner">
		<div style="margin-bottom: 5%;">
	<tr><td><span>CURRENT STOCK AVAILABLE: </span></td><td><span style="color: red; font-weight: 600;font-size: 20px;"> <?php echo $row['Stock']; ?></span></td></tr><br>
</div>
	<script type="text/javascript">
		function input(){
		var a = <?php echo $row['Stock'] ?>;
		var b = document.getElementById("b").value;
		if (b == ''){
			y = 0
		}
		else{
			y = parseInt(b)
		}

		var x = a + y;
		document.getElementById("x").innerHTML=x

	}
	</script>
	<form action="restock.php" method="POST" oninput="input()">
			<div hidden=""><input name="prodn"  value="<?php echo $number ?>"></div>
			<label>
			<span>Additional Amount</span>
			<input id="b" type="number" name="addstock" required="">
			</label>
			<label>
			<span>New Stock Amount :</span>
			<span id="x" style="color: red; font-weight: 600;font-size: 20px;" name=""></span>
			</label>
		</div>
			<input type="submit" name="submit" id="sub" class="submit" value="SAVE">
	</form>
</div>
<div id="other">
	<h1 style="text-align: center; color: blue">EDIT PRODUCT</h1>
</div>
</body>
</html>