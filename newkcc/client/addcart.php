<?php

session_start();

include('db.php');
$index = $_POST['index'];
$amount = $_POST['amount'];
if ($amount == null){
	$number = 1;
}
else{
	$number = $amount;
}
$string = '';
$lenght = 20;

$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$size = strlen($char);
for($i = 0; $i < $lenght; $i++){
	$str = $char[rand(0, $size-1)];
	$string .= $str;
}

$userserial = $_SESSION['login_user'];; //urgent fixing needed


$query1 = "SELECT * from products where No LIKE '$index'";
$results = mysqli_query($con, $query1);
$count = mysqli_num_rows($results);
$x=1;

for($count > 0;$count--;) {
$row = mysqli_fetch_array($results);
$name=$row['Name'];
$price=$row['Price'];
$stock=$row['Stock'];
$time=$row['thedate'];

$query = "CREATE TABLE IF NOT EXISTS cart$userserial(No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,product VARCHAR(255) NOT NULL,price int(40) NOT NULL, amount int(40) not null, totalprice int(40), productserial VARCHAR(255))";
$results = mysqli_query($con, $query);

$totalprice = (int)$price*(int)$number;

$insert = "INSERT INTO cart$userserial(product,price,amount,totalprice,productserial) VALUES ('$name','$price','$number','$totalprice','$string')";
$results2 = mysqli_query($con, $insert);
}
header("Location: productsession.php?addcart = $number");
?>