
 <?php 
include('db.php');
 $number=isset($_GET['value'])? $_GET['value'] : '';
 $results = mysqli_query($con,"SELECT categoryname From Category where No = '$number'");
 $row = mysqli_fetch_array($results);
	$name=$row['Name'];
 if(mysqli_query($con,"DELETE FROM Category WHERE No='$number'")){ 
 	mysqli_query($con,"DELETE FROM product_image where product_name = '$name'");
header("location: Category.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: Category.php?remarks=error&value=$e");  
 }
 ?>