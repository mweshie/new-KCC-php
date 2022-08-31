<?php 
include("db.php");
$userserial = $_SESSION['login_user'];
$dets="SELECT * FROM client WHERE userserial='$userserial'";
$result1=mysqli_query($con,$dets);
$row=mysqli_fetch_array($result1);
$address=$row['address'];
$fname =$row['firstname'];
$lname =$row['lastname'];
$email =$row['email'];
$phone =$row['phone'];
//echo "$fname $lname";
$result = mysqli_query($con,"SELECT SUM(totalprice) AS value_sum FROM cart$userserial");
$row = mysqli_fetch_assoc($result);
if ($row != null) {
$sum = $row['value_sum'];
//echo "$sum";
}
else{
$sum = 0;
}
?>