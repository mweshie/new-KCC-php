<?php 

//session_start();
include('db.php');

$userserial = $_SESSION['login_user'];

$del =mysqli_query($con,"DELETE FROM cart$userserial");

if($del===True){
		echo "Record deleted successfully";
	}
else{
	echo "Error deleting record: " . $con->error;
}
 ?>