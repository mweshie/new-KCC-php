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
	$price=$row['Price'];
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
	<div class='polaroid'>
	<a href='proddetails.php?value=$index'>
	<div class='img'>
  <img src='http://$ip/Admin/$imagepath' alt='$name'>
</div>
  <div class='container'>
    <p id='p1'>$name</p>
<p id='price'>Kshs. $price</p>
  </div>
  </a>
</div>";
}
    }
?>