
<?php
include("db.php");//calls the db.php script
session_start();//starts the session
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $result = mysqli_query($con,"SELECT * FROM client WHERE username='$username' and password='$password'");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!= 1) { // counts the number of users with same credetials
	header("location: index.php?remark_login=failed");
	 }
	 //the query returns the serial number, the first name and the last name of the client from the client table in the database
	 $row=mysqli_fetch_array($result);
	 $userserial=$row['userserial']; 
	 $fname =$row['firstname'];
	 $lname =$row['lastname'];
	 $phone = $row['phone'];
	 $email = $row['email'];
	 $address = $row['address'];
	 $count=mysqli_num_rows($result);
	 if($count==1) {
	  $_SESSION['login_user']=$userserial; //creates session with the serial number a the id of users
	  $_SESSION['fname']=$fname;
	  $_SESSION['lname'] = $lname;
	  $_SESSION['address'] = $address;
	  $_SESSION['phone'] = $phone;
	  $_SESSION['email'] = $email;
	  header("location: index.php?remark_login=success&fname=$fname&lname=$lname");//if all is successful the user is 
	  //logen in and taken to this page
 }
}
if (mysqli_connect_error()) {
	header("location:index.php?remark_login=servererror");// when the server is off it return server error
}
?>