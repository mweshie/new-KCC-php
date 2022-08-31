<?php 
session_start();
include('db.php');

$userserial = $_SESSION['login_user'];

$query = "SELECT * FROM cart$userserial";
$results =  mysqli_query($con, $query);

$count = mysqli_num_rows($results);
$query3 = "";
$code = '';
$length = 10;

$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$size = strlen($char);
for($i = 0; $i < $length; $i++){
	$str = $char[rand(0, $size-1)];
	$code .= $str;
}
for($count > 0;$count--;) {
$row = mysqli_fetch_array($results);

$product=$row['product'];
$price=$row['price']; 
$amount=$row['amount'];
$totalprice=$row['totalprice'];
$productserial=$row['productserial'];

$values = "";
$query2 = "INSERT INTO product_order_details(Code, product,price,amount,totalprice,productserial,userserial) VALUES ('$code','$product',$price,'$amount','$totalprice','$productserial','$userserial');";
$query3 .= $query2;

}
$add = mysqli_multi_query($con,$query3);
if ($add === TRUE) {
	header("location:index.php?message=success");
} else {
	header("location:index.php?message=error");
}
mysqli_free_result($results);

//$shipdate =$_POST['lastname'];
$time = date("Y-m-d");
include("userdets.php");

$insert = "INSERT INTO order_details(Buyer,Code,Totalcost,shipdate,orderdate,status,userserial,email,phone,Address,lastupdate) VALUES('$fname $lname','$code','$sum','','$time','waiting','$userserial','$email','$phone','$address','$time')";

mysqli_query($con, $insert);

include("deletedata.php");
 ?>