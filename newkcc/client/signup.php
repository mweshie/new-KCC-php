<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<script type="text/javascript" src="Files/script.js"></script>
</head>
<body>
	<div id="backto">
	<a href="productsession.php"><button>< BACK</button></a>
</div>
	<div id="signpane">
		<div class="logo1">
			<img class="cykeslogo1" src="Files/add.png">
			<p class="cykestitle1">Sign Up</p>
		</div>
		<div class="inlog1">
		<form action="usersignup.php" method="POST">
			<div id="part1">
			<label>
			<span>Firstname</span>
			<input id="inputs" type="text" name="firstname" required="">
			</label>
			<label>
			<span>Lastname</span>
			<input id="inputs" type="text" name="lastname" required="">
			</label>
			<label>
			<span>Username</span>
			<input id="inputs" type="text" name="username" required="">
			</label>
			<label>
			<span>Email</span>
			<input id="inputs" type="email" name="email" required="">
			</label>
		</div>
		<div id="part2">
			<label>
			<span>Address</span>
			<input id="inputs" type="text" name="address" required="">
			</label>
			<label>
			<span>Phone</span>
			<input id="inputs" type="tel" name="phone" required="">
			</label>
			<label>
			<span>Password</span>
			<input id="inputs" type="password" name="password" required="">
			</label>
			<label>
			<span>Confirm Password</span>
			<input id="inputs" type="password" name="cpassword" required="">
			</label>
			</div>
			<input id="signbtn" type="submit" name="login" value="SignUp" onclick="">
		</form>
		<!--<p id="toac"  href="javascript:void(0)" onclick="log()">Have an Account? Login</p>-->
	</div>
</div>
<?php
$remarks = isset($_GET['sign_up']) ? $_GET['sign_up'] : '';
if ($remarks=='passerror') {
echo ' <div id="failed" class="fail">Error! Passwords Don\'t Match!
<progress id="prog" value="0" max="1000"></progress></div> ';
}
if ($remarks=='success') {
echo ' <div id="failed" class="fail">Account Created Successfully
<progress id="prog" value="0" max="1000"></progress></div> ';
}
if ($remarks=='passworderror') {
echo ' <div id="failed" class="fail">Unknow Error!
<progress id="prog" value="0" max="1000"></progress></div> ';
}
?>
</body>
</html>