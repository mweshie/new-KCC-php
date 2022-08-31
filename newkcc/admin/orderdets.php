<?php 
$query2 = "SELECT * FROM product_order_details WHERE Code = '$remarks'";
	$results = mysqli_query($con, $query2);
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

	echo"<div id='cartdet'><div id='cartimg'><img src='http://$ip/Admin/$imagepath' alt='$name'></div><p>Product Name: <i>$name</i></p><p>Unit Price: <i>Kshs. $price</i></p><p>Units Ordered: <i>$amount</i></p><p>Total Price: <i>Kshs. $totalprice</i></p><p>Serial Number: <i>$productserial</i></p><button id='delb' onclick='document.getElementById(\"ar$no\").style.display=\"block\"'>DELETE</button><a href=''><button id='editb'>EDIT</button></a></div>";
}*

 ?>