<?php
include('db.php');
$query = "select * from products";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);

for($count > 0;$count--;) {
    $row = mysqli_fetch_array($results);
	$name=$row['Name'];
	$index = $row['No'];
	$category=$row['Category'];
	$price=$row['Price'];
	$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
	 $row2 = $image->fetch_assoc();
	 
	 if ($row2 != null){
	 	$imagepath=$row2['image'];
	 }
	 else{
	 	$imagepath = "";
	 }
	 
}

	 
?>