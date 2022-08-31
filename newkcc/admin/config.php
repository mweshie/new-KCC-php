<?php 
include('db.php');
 $rate=$_POST['tax'];
 $currency=$_POST['currency'];
 $delivery = $_POST['method'];
 $deliverymail=$_POST['onemail'];
 if(mysqli_query($con,"INSERT INTO config(Taxrate,Currency,Delivery,emailreportset)VALUES('$rate', '$currency','$delivery','$deliverymail')")){ 
 header("location: Settings.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: Settings.php?remarks=error&value=$e");  
 }
 ?>