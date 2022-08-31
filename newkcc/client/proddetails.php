<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Files/style.css">
<script type="text/javascript" src="Files/script.js"></script>
<link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
<link rel="stylesheet" type="text/css" href="Files/fontawesome.css ">
<script type="text/javascript" src="mainscript.js"></script>
<script type="text/javascript" src="Files/jquery.min.js"></script>
<script type="text/javascript" src="Files/bootstrap.min.js"></script>
<script type="text/javascript" src="Files/all.min.js"></script>
<script type="text/javascript" src="Files/popper.min.js"></script>
</head>
<body>
<?php
	include('menu.php');
?>

<div id="sect"> 
<?php
	include('search.php');
?>
<div id="items" class='row' style="">
<div class='container col-md'style="height: 610px;">
<?php
$number=isset($_GET['value'])? $_GET['value'] : '';
function open($number){

include('db.php');
$query = "SELECT * from products where No='$number'";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);

for($count > 0;$count--;) {
$row = mysqli_fetch_array($results);
$name=$row['Name'];
$index = $row['No'];
$category=$row['Category'];
$price=$row['Price'];
$desc = $row['description'];
$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
$row2 = $image->fetch_assoc();

if ($row2 != null){
$imagepath=$row2['image'];
}
else{
$imagepath = "";
}
echo"
<div id='dets' class='container'>
<img src='../admin/$imagepath' alt='$name'>
<div id='cred' class='container'>
<h5 style='font-size:18px; text-align:left;'>Product Name: $name</h5>
<h5 style='font-size:18px; text-align:left;'>Product Category: $category</h5>
<h5 style='font-size:18px; text-align:left;'>Unit Price: Kshs. $price</h5>
</div>
</div>
<hr>
<div id='description' class='container'>
<p style='color:red;'>Description</p>
<p style='font-size:12px;'>
$desc
</p>
</div>
<div id='amount'>
<form action='addcart.php' method='POST'>
<input type='number' min='1' name='index' value='$number' hidden=''>
<label>
<span>Amount you require:</span>
<input type='number' name='amount' id='amountnu'>
</label>
<input type='submit' name='submitcart'  id='addcart' class='btn btn-primary' value='ADD TO CART'>
</form>
<a href='productsession.php'><button id='closeprod' class='btn btn-danger'>CANCEL</button></a>
</div>
";
}	 
}
open($number);	 
?>
</div>
<div class="container col-md" style="height: auto;">
<div id="re">
<p>RELATED PRODUCTS</p>
</div>
<div class="row">
<?php
include('db.php');
$cat=isset($_GET['category'])? $_GET['category'] : '';
$number=isset($_GET['value'])? $_GET['value'] : '';
$query = "SELECT * from products where Category = '$cat' limit 10";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);

for($count > 0;$count--;) {
$row = mysqli_fetch_array($results);
$name=$row['Name'];
$index = $row['No'];
$stock = $row['Stock'];
$category=$row['Category'];
$price=$row['Price'];
$type = $row['Type'];
$discount=$row['Discount'];
$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
$row2 = $image->fetch_assoc();

if ($row2 != null){
$imagepath=$row2['image'];
}
else{
$imagepath = "";
}
if($type == "PUBLISHED" && $number != $index && $stock > 0){
echo "

<div class='col' style='background-color:#33ff77;margin:0px;padding:0px;border:1px #33ff77 solid;margin:5px;border-radius:5px;'>
<div class='thumbnail' width='100%'>
<a href='proddetails.php?value=$index&category=$category'>
<div style='background-color:white;width:100%;border-radius:5px 5px 0px 0px ;display:flex; justify-content:center;'>
<img src='../admin/$imagepath' alt='$name' height='90px'>
</div>
<div class='caption col-md-12' style='background-color:#33ff77; text-align:center; text-decoration:none; color:white;width:100%;margin:0px;padding:0px;'>
<h6 id='p1'style='color:#ff1a8c;'>$name</h6>
<h6 style='text-decoration: line-through;color:grey;'>Was Kshs. $price</h6>
<h6 id='price' style='color:black;'>Now Kshs. $discount</h6>
</div>
</a>
</div>
</div>";
}
}
?>
</div>
</div>
</div>
</div>
<?php include('cartmodel.php')?>
</body>
</html>
