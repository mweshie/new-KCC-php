<?php

session_start();

include('db.php');
 
$index=isset($_GET['value'])? $_GET['value'] : '';
$userserial = $_SESSION['login_user']; //fixes needed urgently!!

$query = "DELETE FROM cart$userserial WHERE No=$index";
mysqli_query($con, $query);
header("Location: index.php");

?>