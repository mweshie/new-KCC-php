
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
	<div class="container">
<?php
if ($_SESSION == Null) {
	
}
else
{
//session_start();
include('db.php');

$userserial = $_SESSION['login_user'];

$query = "SELECT * FROM cart$userserial";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);

if ($count > 0) {
for($count > 0;$count--;) {
$row = mysqli_fetch_array($results);
$no=$row['No'];
$name=$row['product'];
$price=$row['price']; 
$amount=$row['amount'];
$totalprice=$row['totalprice'];
$productserial=$row['productserial'];
$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
$row2 = $image->fetch_assoc();

if ($row2 != null){
$imagepath=$row2['image'];
}
else{
$imagepath = "";
}
echo "
<div class='container row' id='prd' style='background-color:white; border-radius:5px;width:100%;margin:6px;padding:6px;border:1px solid pink;'>
<div id='cartimg' class='col-4' style='width:100px; height:100px;'>
<img src='../admin/$imagepath' alt='$name' style='width:100px; height:100px;'>
</div>
<div class='col'>
<h6>Product Name: <i>$name</i></h6>
<h6>Unit Price: <i>Kshs. $price</i></h6>
<h6>Units Ordered: <i>$amount</i></h6>
<h6>Total Price: <i>Kshs. $totalprice</i></h6>
<button id='delb' onclick='document.getElementById(\"ar$no\").style.display=\"block\"'>DELETE</button>
<a href=''><button id='editb'>EDIT</button></a>

<div id='ar$no' class='are'>
<p style='color:white; font-size:13px; text-align:center;word-wrap: break-word;'>Deleting $name ?</p>
<a href='deletecartproduct.php?value=$no'><button id='yes'>YES</button>
</a><button id='no' onclick='document.getElementById(\"ar$no\").style.display=\"none\"'>No</button>
</div>
</div>
</div>
";

}
}
else{
 echo "<p id='perror'>Your Cart Is Empty!!<p>";	
}
}
?>
</div>
</body>
</html>