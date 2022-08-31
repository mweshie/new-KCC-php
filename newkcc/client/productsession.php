
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
	include('sliding.php');	
?>
<div id="items" class="row" style="top: 330px;">
<?php

include('db.php');
$query = "select * from products";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);

for($count > 0;$count--;) {
$row = mysqli_fetch_array($results);
$name=$row['Name'];
$index = $row['No'];
$stock = $row['Stock'];
$category=$row['Category'];
$type = $row['Type'];
$price=$row['Price'];
$discount=$row['Discount'];
$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
$row2 = $image->fetch_assoc();

if ($row2 != null){
$imagepath=$row2['image'];
}
else{
$imagepath = "";
}

if($type == "PUBLISHED" && $stock > 0){
echo "
<div class='col' style='background-color:#33ff77;margin:0px;padding:0px;border:1px #33ff77 solid;margin:5px;border-radius:5px;'>
<div class='thumbnail' width='100%'>
<a href='proddetails.php?value=$index&category=$category'>
<div style='background-color:white;width:100%;border-radius:5px 5px 0px 0px ;display:flex; justify-content:center;'>
<img src='../admin/$imagepath' alt='$name' class='img-responsive' id='productimage'>
</div>
<div class='caption col-md-12' style='background-color:#33ff77; text-align:center; text-decoration:none; color:white;width:100%;margin:0px;padding:0px;'>
<div style='padding:0px;margin:0px;'>
<h6 id='p1'style='color:#ff1a8c;'>$name</h6>
<h6 style='text-decoration: line-through;color:grey;'>Was Kshs. $price</h6>
<h6 id='price' style='color:black;'>Now Kshs. $discount</h6>
</div>
</div>
</a>
</div>
</div>

";
}
}
?>
</div>
</div>

<?php include('cartmodel.php')?>
</body>
</html>