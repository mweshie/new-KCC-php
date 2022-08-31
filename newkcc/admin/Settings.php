
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" type="text/css" href="Files/style.css">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/bootstrap.grid.min.css ">
	<link rel="stylesheet" type="text/css" href="Files/fontawesome.css ">
	<script type="text/javascript" src="mainscript.js"></script>
	<script type="text/javascript" src="Files/jquery.min.js"></script>
	<script type="text/javascript" src="Files/bootstrap.min.js"></script>
	<script type="text/javascript" src="Files/all.min.js"></script>
	<script type="text/javascript" src="Files/popper.min.js"></script>
	<script type="text/javascript" src="mainscript.js"></script>
</head>
<body>
	<div id="top">
<div id="pagename">
<h1>SETTINGS</h1>
</div>
</div>
<div id="settings">
<div id="appset">
	<fieldset>
	<legend id="elem">APPLICATION SETTINGS</legend>
	<form action="config.php" method="POST">
		<div id="firstc1">
	<div id="elem">Tax:<br><input id="inputs" type="number" name="tax">%</div>
	<div id="elem">Curency :<br>
		<input id="inputs" list="Curency" name="currency">
		<datalist id="Curency">
		<?php include("currency.php") ?>
	</datalist>
	</div>
	<div id="elem">Delivery Method:<br>
		<input id="inputs" list="method" name="method">
		<datalist id="method">
		<option value="Motorcycle"></option>
		<option value="Personal Delivery"></option>
		<option value="Bicycle"></option>
		</datalist>
	</div>
</div>
	<div>
	<div id="elem">Delivery Mail Settings:<br></div>
	<div id="elem"><input type="radio" name="onemail" value="Email On New Order">  Email on New Order<br></div>
  <div id="elem"><input type="radio" name="onemail" value="Email after Processed" checked>  Email after Processed<br></div>
</div>
<input id="emailsettings" type="submit" name="emailsettings" class="setbtn" value="SAVE">
</form>
</fieldset>
</div>
<div id="userset">
	<fieldset>
	<legend id="elem">USER PANEL SETTINGS</legend>
	<form action="usersignup.php" method="POST">
		<div id="firstc">
		<div id="elem">Name:<br><input id="inputs" type="text" name="name" autocomplete="off" required=""></div>
		<div id="elem">Username:<br><input id="inputs" type="text" name="username" autocomplete="off" required=""></div>
		<div id="elem">Email:<br><input id="inputs" type="email" name="email" autocomplete="off" required=""></div>
	</div>
		<div>
		<div id="elem">Password:<br><input id="inputs" type="password" name="password" autocomplete="off" required=""></div>
		<div id="elem">Confirm Password:<br><input id="inputs" type="password" name="cpassword" autocomplete="off" required=""></div>
	</div>
<input id="usersettings" type="submit" name="usersettings" class="setbtn" value="SAVE">

</form>
</fieldset>
</div>
</div>
<?php
$remarks = isset($_GET['remark']) ? $_GET['remark'] : '';
if ($remarks=='passworderror') {
	echo ' <div id="failed" class="fail">Signup Failed!, Password Error!
			<progress id="prog" value="0" max="1000"></progress></div> ';
	}
 ?>
</body>
</html>
