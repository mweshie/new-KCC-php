<?php 
include('db.php');
 $nname=$_POST['name'];
 $nusername=$_POST['username'];
 $nemail = $_POST['email'];
 $npassword=$_POST['password'];
 $ncpassword = $_POST['cpassword'];
 if ($npassword == $ncpassword) {
 	 if(mysqli_query($con,"INSERT INTO user(Name,Username,Email,Password)VALUES('$nname','$nusername','$nemail','$npassword')")){ 
	 header("location: Settings.php?remarks=success");
	 }
 	 }
 else{
	 header("location: Settings.php?remark=passworderror"); 
 }
 ?>