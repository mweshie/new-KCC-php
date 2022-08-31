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
<div id="items" class="row">
<?php
include('db.php');
$catt = isset($_GET['category']) ? $_GET['category'] : '';

$query = "SELECT * from products where Category LIKE '$catt'";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);
$x=1;
if ($count == 0){
echo "<p id='none'>Product '$catt' Does No Exist!</p>";
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
$discount=$row['Discount'];
$desc = $row['description'];
$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
$row2 = $image->fetch_assoc();

if ($row2 != null){
$imagepath=$row2['image'];
}
else{
$imagepath = "";
}
if($type == "PUBLISHED"){
echo  "
<div class='col' style='background-color:#33ff77;margin:0px;padding:0px;border:1px #33ff77 solid;margin:5px;border-radius:5px;'>
<div class='thumbnail' width='100%'>
<a href='proddetails.php?value=$number&category=$category'>
<div style='background-color:white;width:100%;border-radius:5px 5px 0px 0px ;display:flex; justify-content:center;'>
<img src='../admin/$imagepath' alt='$name' id='productimage'>
</div>
<div class='caption col-md-12' style='background-color:#33ff77; text-align:center; text-decoration:none; color:white;width:100%;margin:0px;padding:0px;'>
<h6 id='p1'style='color:#ff1a8c;'>$name</h6>
<h6 style='text-decoration: line-through;color:grey;'>Was Kshs. $price</h6>
<h6 id='price' style='color:black;'>Now Kshs. $discount</h6>
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

</body>
</html>