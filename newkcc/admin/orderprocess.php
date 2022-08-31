<?php 
include("db.php");
$remarks = isset($_GET['order']) ? $_GET['order'] : '';

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
	$prod = mysqli_query($con,"SELECT Stock From products where Name ='$name'");
	$value = mysqli_fetch_array($prod);
	$stock = $value['Stock'];
	if($stock < $amount){
		header("location:orderlist.php?remark=error&product=$name");
	}
	elseif($stock > $amount){
		$newstock = (int)$stock-(int)$amount;
		mysqli_query($con,"UPDATE products SET Stock='$newstock' WHERE Name='$name'");
		$totalprice=$row['totalprice'];
	}
}
$time = date("Y-m-d");
mysqli_query($con,"UPDATE order_details SET status='processed',shipdate='$time' WHERE Code='$remarks'");
header("location:orderlist.php?remark=success");
}
?>