<?php 
include ("db.php");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"SELECT username,userserial from client where username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['userserial'];
if(!isset($loggedin_session) || $loggedin_id==NULL) {
header("Location: index.php?remark_login=message");
}
?>
