<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Files/kcc logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New KCC Admin</title>
	<link rel="stylesheet" type="text/css" href="Files/main.css ">
	<script type="text/javascript" src="mainscript.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/fontawesome.css ">

	<script type="text/javascript" src="Files/jquery.min.js"></script>
	<script type="text/javascript" src="Files/bootstrap.min.js"></script>
	<script type="text/javascript" src="Files/all.min.js"></script>
	<script type="text/javascript" src="Files/popper.min.js"></script>-->
</head>
<body>
	<div class="cont" id="loginpan">
	<div class="logo">
	<img id="cykeslogo" src="Files/logo.jpg" class="cykeslogo">
	<div class="cykestitle" id="cykestitle"><p>NEW KCC ADMIN</p></div>
	</div>

	<div class="inlog">
		<form action="logincheck.php" method="POST" id="signin" id="reg">

			<label>
			<span>Username</span>
			<input id="inputs" type="text" name="username">
			</label>
			<label>
			<span>Password</span>
			<input id="inputs" type="password" name="password">
			</label>
			<input id="inlogbtn" type="submit" name="login" value="LOGIN" onclick="ppane()">
		</form>
	</div>
</div>
<?php
			$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
			if ($remarks==null and $remarks=="") {
			//echo ' <div id="reg-head">Login Here</div> ';
			echo ' <div id="failed" class="fail">Login Here
						<progress id="prog" value="0" max="1000"></progress></div> ';
			}
			if ($remarks=='failed') {
			//echo ' <div id="failed" class="fail">Login Failed!, Invalid Credentials</div> ';
			echo ' <div id="failed" class="fail">Login Failed!, Invalid Credentials
						<progress id="prog" value="0" max="1000"></progress></div> ';
			}
			if($remarks=="servererror"){
				//echo ' <div id="failed" class="fail">Server Error!, Unable To Connect</div> ';
				echo ' <div id="failed" class="fail">Server Error!, Unable To Connect
					    <progress id="prog" value="0" max="1000"></progress></div> ';
			}
			?>

</body>
</html>
