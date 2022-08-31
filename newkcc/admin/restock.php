<?php 
include('db.php');
$product = $_POST['prodn'];
$new=$_POST['addstock'];
$results = mysqli_query($con,"SELECT * FROM products where No='$product'");
$row = mysqli_fetch_array($results);
$old = $row['Stock'];
$newstock = $old + $new;
$time = date("Y-m-d");
echo $newstock;
if(mysqli_query($con,"UPDATE products SET Stock='$newstock', thedate='$time' WHERE No='$product'")){
header("location: Products.php?remarks=success");
}
else{
  $e=mysqli_error($con);
 header("location: Products.php?remarks=error&value=$e");  
}
?>