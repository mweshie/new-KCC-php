<?php
include('db.php');
function customError($errno, $errstr) {
  $productsnumber = 0;
}
set_error_handler("customError");
if(session_start()){
if ($_SESSION == Null){
	$productsnumber = 0;
}
else {
$userserial = $_SESSION['login_user'];
$query1 = "CREATE TABLE IF NOT EXISTS cart$userserial(No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,product VARCHAR(255) NOT NULL,price int(40) NOT NULL, amount int(40) not null, totalprice int(40), productserial VARCHAR(255))";
mysqli_query($con, $query1);

$query = "SELECT * from cart$userserial";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);
$productsnumber = $count;
}
}
else{
	//unset($_SESSION['login_user']);
	$productsnumber = 0;
}
?>