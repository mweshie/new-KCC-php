<?php 
include ("db.php");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"SELECT username,id from user where username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['id'];
if(!isset($loggedin_session) || $loggedin_id==NULL) {
header("Location: index.php");
}
?>
