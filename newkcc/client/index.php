<?php
//include('authenticate.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Files/kcc logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New KCC</title>
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/fontawesome.min.css ">
	<script type="text/javascript" src="mainscript.js"></script>
	<script type="text/javascript" src="Files/jquery.min.js"></script>
	<script type="text/javascript" src="Files/bootstrap.min.js"></script>
	<script type="text/javascript" src="Files/all.min.js"></script>
	<script type="text/javascript" src="Files/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<script type="text/javascript" src="Files/script.js"></script>
</head>
<body>
	<div id="acctop">
		<div id="acc"><button class="btn btn-sm btn-primary" type="button" id="btn_p" data-toggle="modal" data-target="#staticBackdrop2" id="accountbtn"><i class='far fa-user'></i><span> Login</span></button></div>
	</div>
	
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks=='success') {
	$fname = isset($_GET['fname']) ? $_GET['fname'] : '';
	$lname = isset($_GET['lname']) ? $_GET['lname'] : '';
	
echo "<div id='failed' class='fail' style='margin:0px;padding:0px; text-transform
:capitalize;'>$fname Logged in Successfully
<progress id='prog' value='0' max='1000' style='color:pink; background:pink;'></progress></div>
<div class='modal fade' id='staticBackdrop' role='dialog' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
<div class='modal-dialog' style='width:auto; height:auto;'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title' id='staticBackdropLabel' style='text-transform:capitalize;'>$fname $lname</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='close'><span aria-hidden='true'>&times</span></button>
</div>
<div class='modal-body d-flex flex-column justify-content-center'>
<img src='Files/dp.png' alt='Account' class='p-2' style='background-color:pink; align-self:center; width:40%; border-radius:100%; margin-bottom:6px;'>
<button class='btn btn-warning' style='width:100%; margin-bottom:6px;'>Settings</button>
<a href='logout.php'><button class='btn btn-primary' style='width:100%;'>Logout</button></a>
</div><div class='modal-footer'>
<button type='button' class='btn btn-secondary' data-dismiss='modal'> Close</button>
</div>
</div>
</div>
</div>
<script>
document.getElementById('acc').innerHTML = \"<button class='btn btn-sm btn-primary' type='button' id='btn_p' data-toggle='modal' data-target='#staticBackdrop'><i class='far fa-user'></i><span> $fname</span></button>\"
</script>";
};
if ($remarks=='failed') {
echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
:capitalize;">Login Failed!, Invalid Credentials
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if($remarks=="servererror"){
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Server Connection Error!
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if($remarks=="carterror"){
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Login to acccess!
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if($remarks=="logout"){
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;"><i class="fa fa-exclamation"></i> Logout Successfull
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if($remarks=="message"){
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">You Need to login.
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}

$remarksignup = isset($_GET['sign_up']) ? $_GET['sign_up'] : '';
if ($remarksignup=='passerror') {
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Error! Passwords Don\'t Match!
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if ($remarksignup=='success') {
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Account Created Successfully
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if ($remarksignup=='passworderror') {
	echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Unknow Error!
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
$remarkscart = isset($_GET['message']) ? $_GET['message'] : '';
if ($remarkscart =='success') {
echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Order Submitted Successfully
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
if ($remarkscart =='error') {
echo ' <div id="failed" class="fail" style="margin:0px;padding:0px; text-transform
	:capitalize;">Error!, Request not Submited
<progress id="prog" value="0" max="1000" style="color:pink; background:pink;"></progress></div> ';
}
?>


<div class="modal fade" id="staticBackdrop2" role="dialog"  tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
<div class="modal-dialog" style='width:auto; height:auto;'>
<div class="modal-content">
<div class="modal-header">	
<h5 class="modal-title" id="staticBackdropLabel2">Login</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times</span></button>
</div>
<div class="modal-body d-flex flex-column align-items-center">
	
		
			<img class="cykeslogo p-2" style="height:100px;width:auto;" src="Files/login.png">		
		
		<form action="login.php" method="POST">
			<label class="p-2" style="width:100%;">
			<span>Username</span>
			<input style="width:100%;border:none; border-bottom:1px solid pink;" type="text" name="username" required="">
			</label>
			<label class="p-2" style="width:100%;">
			<span>Password</span>
			<input style="width:100%;border:none;border-bottom:1px solid pink;" type="password" name="password" required="">
			</label>
			<input class="btn btn-primary" style="width:100%;"type="submit" name="login" value="LOGIN" href="javascript:void(0)" onclick="changebutton()">
		</form>
		<hr>
		<p class="p-2"> Have no account! Click the button below to sign up<a></a></p>
		<button class="btn btn-sm btn-danger p-2" data-dismiss='modal' data-toggle="modal" data-target="#staticBackdrop3" style="width:100%; margin-bottom:6px;" type="button" id="Collapse"><i class='fa fa-arrow-left'></i> SIGN UP</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="staticBackdrop3" role="dialog"  tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
<div class="modal-dialog"style='width:auto; height:auto;'>
<div class="modal-content">
<div class="modal-header">	
<h5 class="modal-title" id="staticBackdropLabel3">Sign Up</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times</span></button>
</div>
<div class="modal-body d-flex flex-column align-items-center">
	<style type="text/css">
		#inputfield{
			width:80%;
			border:none;
			border-bottom:1px 
			solid pink;
		}
		#spann{
			width:100%;
		}
	</style>
		
		<img class="cykeslogo p-2" style="height:100px;width:auto;" src="Files/add.png">		
		
		<form action="usersignup.php" method="POST">
		<div style="float: left; width: 50%;">
			<label>
			<span id="spann">Firstname</span>
			<input id="inputfield" type="text" name="firstname" required="">
			</label>
			<label>
			<span id="spann">Lastname</span>
			<input id="inputfield" type="text" name="lastname" required="">
			</label>
			<label>
			<span id="spann">Username</span>
			<input id="inputfield" type="text" name="username" required="">
			</label>
			<label>
			<span id="spann">Email Address</span>
			<input id="inputfield" type="email" name="email" required="">
			</label>
		</div>
		<div style="float: right; width: 50%;">
			<label>
			<span id="spann">Address</span>
			<input id="inputfield" type="text" name="address" required="">
			</label>
			<label>
			<span id="spann">Phone</span>
			<input id="inputfield" type="tel" name="phone" required="">
			</label>
			<label>
			<span id="spann">Password</span>
			<input id="inputfield" type="password" name="password" required="">
			</label>
			<label>
			<span id="spann">Confirm Password</span>
			<input id="inputfield" type="password" name="cpassword" required="">
			</label>
			</div>
			<br>
			<input class="btn btn-primary" style="width:100%;" type="submit" name="login" value="SignUp" onclick="">
		</form>

		<hr>
		<p class="p-2"> Have an account! Click the button below to Login</p>
		<button class="btn btn-sm btn-danger p-2" data-dismiss='modal' data-toggle="modal" data-target="#staticBackdrop2" style="width:100%; margin-bottom:6px;" type="button" id="Collapse"><i class='fa fa-arrow-left'></i> Login</button>
</div>
</div>
</div>
</div>
<iframe id="sect2" src="productsession.php">
<?php
$catt = isset($_GET['category']) ? $_GET['category'] : '';
if ($catt!=""){
	echo"<iframe id='sect' src='category.php?category=$catt'>
	</iframe>";
}
?>
</iframe>

</body>
<script>
function changebutton() {
    var button = document.getElementById("acc");
    button.innerHTML = "<button class='btn btn-sm btn-primary' type='button' id='btn_p' data-toggle='modal' data-target='#staticBackdrop'><i class='far fa-user'></i><span> Account</span></button>"

}
</script>
</html>
