<?php
include('db.php');//call the db.php script for database credentials
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$nusername=$_POST['username'];
$nemail = $_POST['email'];           
$npassword=$_POST['password'];
$ncpassword = $_POST['cpassword'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$string = ''; //an empty variable to hold the serial number
$lenght = 8; // number of character the serial number will have

$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; //characters for generating user serial nnumnber
$size = strlen($char); //reading the number of characters provided in $char
for($i = 0; $i < $lenght; $i++){ //loop 8 times to generate a 8-character serial number
	$str = $char[rand(0, $size-1)];
	$string .= $str;
}
if($npassword != $ncpassword){//if the password and the confirm password are not the same
	header("location:index.php?sign_up=passerror");
}
else if($npassword == $ncpassword){
	if(mysqli_query($con,"INSERT INTO client(firstname,lastname,username,email,password,address,userserial,phone)VALUES('$fname','$lname','$nusername','$nemail','$npassword','$address','NKCC$string','$phone')")){ 
 	//query mysql insert to insert the new user's details to the database
	header("location: index.php?sign_up=success");//if succefull redirect to signup.php
 	}
 	 
	else{
		header("location: index.php?sign_up=passworderror"); //if the password and the confirm password are not the same
	}
}
?>