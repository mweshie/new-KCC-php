<?php 
include('db.php');
 $number=isset($_GET['value'])? $_GET['value'] : '';
 $results = mysqli_query($con,"SELECT Name From Products where No = '$number'");
 $row = mysqli_fetch_array($results);
	$name=$row['Name'];
 if(mysqli_query($con,"DELETE FROM Products WHERE No='$number'")){ 
 	mysqli_query($con,"DELETE FROM product_image where product_name = '$name'");
header("location: Products.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: Products.php?remarks=error&value=$e");  
 }
 ?>