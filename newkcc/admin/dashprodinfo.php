<?php
include("db.php");
$sql = "SELECT Type from products where  Type = 'PUBLISHED'";
$results = mysqli_query($con, $sql);
$count = mysqli_num_rows($results);
if ($count == Null) {
	$no = 0;
}
else{
	$no = $count;
}
$num1 = "$no";
$sqlv = "SELECT Type from products where  Type = 'UNPUBLISHED'";
$resultsv = mysqli_query($con, $sqlv);
$countv = mysqli_num_rows($resultsv);
if ($countv == Null) {
	$nov = 0;
}
else{
	$nov = $countv;
}
$numv = "$nov";
$sqli = "SELECT Stock from products where  Stock > 50";
$results1 = mysqli_query($con, $sqli);
$count1 = mysqli_num_rows($results1);
if ($count1 == Null) {
	$no1 = 0;
}
else{
	$no1 = $count1;
}
$num2 = "$no1";
$sqlr = "SELECT Stock from products where  Stock between 1 and 50";
$results2 = mysqli_query($con, $sqlr);
$count2 = mysqli_num_rows($results2);
if ($count2 == Null) {
	$no2 = 0;
}
else{
	$no2 = $count2;
}
$num3 = "$no2";
$sqls = "SELECT Stock from products where  Stock = 0";
$results3 = mysqli_query($con, $sqls);
$count3 = mysqli_num_rows($results3);
if ($count3 == Null) {
	$no3 = 0;
}
else{
	$no3 = $count3;
}
$num4 = "$no3";
$processed = mysqli_query($con, "SELECT * from order_details where  status = 'processed'");
$num1 = mysqli_num_rows($processed);
if ($num1 == Null) {
	$process = 0;
}
else{
	$process = $num1;
}
$processedno = "$process";
$processed2 = mysqli_query($con, "SELECT * from order_details where  status = 'waiting'");
$waitno = mysqli_num_rows($processed2);
if ($waitno == Null) {
	$wait = 0;
}
else{
	$wait = $waitno;
}
$waitingno = "$wait";

$allno = (int)$processedno+(int)$waitingno;
?>