<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
#top{
top: 0px;
height: 6%;
position: fixed;
width: 100%;
background-color: black;
}
#ilo{
width: 100%;
height: auto;
margin: 0;
padding: 0;
margin-top: 5%;
}
#dets1{
position: fixed;
width: 30%;
left: 69%;
top: 6%;
background-color: green;
height: 94%;
border:1px solid white;
color: white;
display: inline;
justify-content: center;
}
#dets1 h2, #dets1 p,#dets1 h3{
width: 100%;
padding: 0;
text-align: center;
}
#cartdet{
display: block;
border:2px solid black;
width: 68%;
margin-bottom: 5px;
height: auto;
background-color:white;
padding: 0;
}
#cartdet a{
margin-left: 30px;
}
#cartdet p{
color: #267326;
padding: 0;
margin: 0;
}
#cartdet #cartimg{
left: 0px;
width: 30%;
background-color: white;
height: auto;
display: flex;
justify-content: center;
}
#cartdet #cartimg img{
width: auto;
height: 100px;
}
#cartdet #detts{
margin-top: 0px;
margin-left: 30%;
}
#delb{
height: 24px;
background-color: red;
width: 100px;
outline: none;
border:none;
color: white;
margin-left: 90px;
cursor: pointer;
}
#editb{
outline: none;
color: white;
cursor: pointer;
border:none;
height: 24px;
margin-left: 100px;
background-color: green;
width: 100px;
}
#pros{
outline: none;
color: white;
cursor: pointer;
border:none;
height: 24px;
margin-left: 100px;
background-color: blue;
width: 100px;
}
.are{
height: 100px;
width: 250px;
position: absolute;
background-color: #00802b;
display: none;
margin-top: -170px;
left: 23%;
}
.are #yes{
background-color: red;
position: absolute;
margin-top: 20px;
height: 20px;
border:none;
color: white;
cursor: pointer;
outline: none;
left: 20px;
width: 100px;
}
.are #no{
background-color: blue;
position: absolute;
margin-top: 20px;
height: 20px;
cursor: pointer;
border:none;
outline: none;
color: white;
left: 130px;
width: 100px;
}
#pr{
background-color: white;
margin: 2px;
width: 98%;
height: 30%;
border-radius: 20px;
top:65%;
position: absolute;
}
#dets1 #go{
height: 32px;
width: 60%;
position: absolute;
background-color: blue;
outline: none;
border:none;
color: white;

left: 20%;
border-radius: 10px;
cursor: pointer;
}
#dets1 #go:hover{
background-color: #001a4d;
}
#conf{
visibility: hidden;
position: fixed;
height: 25%;
width: 60%;
background-color: #53c68c;
left: 20%;
border-radius: 5px;
top: 30%;
border:5px solid black;
display: flex;
justify-content: center;

}
#txt{
width: 100%;
text-align: center;
color: white;
position: absolute;
top: 16%;
}
#txtt{
width: 100%;
text-align: center;
color: white;
top: 16%;
}
#imm{
position: absolute;
height: 20%;
width: auto;
}
.conf{
display: none;
z-index: 2;
height: 200px;
width: 500px;
background-color: #53c68c;
left: 20%;
border-radius: 5px;
top: 30%;
border:5px solid black;


}
#cann{
height: 20%;
width: 30%;
margin-top: 75%;
background-color: blue;
outline: none;
border:none;
color: white;
cursor: pointer;
border-radius: 10px;
left: 15%;
}
#proo:hover{
	background-color: #990000;
}
#proo{
height: 20%;
width: 30%;
color: white;
margin-top: 75%;
cursor: pointer;
border:none;
border-radius: 10px;
outline: none;
background-color: red;
left: 55%;
}	
#cann:hover{
	background-color: #001a33;
}
#can{
height: 20%;
width: 30%;
top: 75%;
background-color: blue;
outline: none;
border:none;
color: white;
position: absolute;
cursor: pointer;
border-radius: 10px;
left: 15%;
}
#pro:hover{
	background-color: #990000;
}
#pro{
height: 20%;
width: 30%;
color: white;
top: 75%;
cursor: pointer;
border:none;
border-radius: 10px;
outline: none;
background-color: red;
position: absolute;
left: 55%;
}	
#can:hover{
	background-color: #001a33;
}
#pro2{
height: 20%;
width: 30%;
color: white;
top: 75%;
cursor: pointer;
border:none;
border-radius: 10px;
outline: none;
background-color: red;
position: absolute;
left: 60%;
}	
#pro2:hover{
	background-color: #990000;
}
#but1{
	height: 60%;
	margin-top: 8px;
	width: 130px;
	margin-left: 2%;
	color: black;
	border-radius: 10px;
	border:none;
	cursor: pointer;
	padding: 2px;
	background-color: red;
	outline: none;
}
</style>
</head>
<body>
	<div id="top">
		<a href="orderlist.php"><button id="but1" class="bb">BACK</button></a>
		<h2 style="color: white;padding: 0;top: -12px;left:30%;text-align: center;position: absolute;">PROCESSESSING ORDER</h>
	</div>
	<div id="ilo">
<?php 
$remarks = isset($_GET['order']) ? $_GET['order'] : '';
include('db.php');
$result3 = mysqli_query($con, "SELECT Taxrate,Currency,Delivery,emailreportset FROM config ORDER BY No DESC limit 1");
    $row3 = mysqli_fetch_assoc($result3);
    $taxrate = $row3['Taxrate'];
    $Currency = $row3['Currency'];
    $Delivery = $row3['Delivery'];
    $emailreportset = $row3['emailreportset'];

$query = "SELECT * FROM order_details WHERE Code = '$remarks'";
$result1 = mysqli_query($con,$query);
$row1 = mysqli_fetch_assoc($result1);
	$buyer=$row1['Buyer'];
	$code = $row1['Code'];
	$totalcost = $row1['Totalcost'];
	$datetoship = $row1['shipdate'];
	$dateoforder = $row1['orderdate'];
	$phone = $row1['phone'];
	$email = $row1['email'];
	$address = $row1['Address'];
	$status = $row1['status'];
	$tax = (int)$totalcost*(int)$taxrate/100;
	$afterta= (int)$totalcost+(float)$tax;
	if ($status == 'waiting' or $status == null){
		$status = 'waiting';
		echo "<div id='dets1'><h2 style='color:#00ffff;'>ORDER NO: $remarks </h2><h3>CUSTOMER DETAILS</h3><p>Customer Name:<i> $buyer</i></p><p>Date Of Order: <i>$dateoforder</i></p><p>Delivery Date: <i>NOT DELIVERED</i></p><p>Order Status:<i> $status</i></p><p>Phone:<i> $phone</i></p><p>Email:<i> $email</i></p><p>Address:<i> $address</i></p><div id='pr'><h3 style='color:green;'><b>Total Order Cost: <i>$Currency.$totalcost</i></b></h3><p style='color:black;'>Tax($taxrate%): $Currency.$tax</p><h3 style='color:red;'>Total After Tax: $Currency.$afterta</h3><button id='go' onclick='document.getElementById(\"conf\").style.visibility=\"visible\"'>PROCESS ORDER</button></div></div><div id='conf'><img id='imm' src='Files/information.png'  alt='CAUTION!'><h3 id='txt'>AFTER BEING PROCESSED THE STATUS CANNOT BE CHANGED AND PRODUCT STOCK WILL BE REDUCED!<br>PLEASE CHECK THE ORDER BEFORE PROCEEDING</h3><button id='can' onclick='document.getElementById(\"conf\").style.visibility=\"hidden\"'>CANCEL</button><a href='orderprocess.php?order=$remarks'><button id='pro'>PROCESS</button></a></div>";
	}
	elseif ($status == 'processed') {
		echo "<div id='dets1'><h2 style='color:#00ffff;'>ORDER NO: $remarks </h2><h3>CUSTOMER DETAILS</h3><p>Customer Name:<i> $buyer</i></p><p>Date Of Order: <i>$dateoforder</i></p><p>Delivery Date: <i>$datetoship</i></p><p>Order Status:<i> $status</i></p><p>Phone:<i> $phone</i></p><p>Email:<i> $email</i></p><p>Address:<i> $address</i></p><div id='pr'><h3 style='color:green;'><b>Total Order Cost: <i>$Currency.$totalcost</i></b></h3><p style='color:black;'>Tax($taxrate%): $Currency.$tax</p><h3 style='color:red;'>Total After Tax: $Currency.$afterta</h3><button id='go' onclick='document.getElementById(\"conf\").style.visibility=\"visible\"'>PROCESS ORDER</button></div></div><div id='conf'><img id='imm' src='Files/information.png'  alt='CAUTION!'><h3 id='txt'>THIS ORDER HAS BEEN PROCESSED ALREADY!<br> PLEASE GO BACK</h3><button id='pro2' onclick='document.getElementById(\"conf\").style.visibility=\"hidden\"'>CANCEL</button></a></div>";
		
	}
	$query2 = "SELECT * FROM product_order_details WHERE Code = '$remarks'";
	$results = mysqli_query($con, $query2);
	$count = mysqli_num_rows($results);
	if ($count > 0) {
	for($count > 0;$count--;) {
	$row = mysqli_fetch_array($results);
	$no=$row['No'];
	$name=$row['product'];
	$price=$row['price']; 
	$amount=$row['amount'];
	$totalprice=$row['totalprice'];
	$productserial=$row['productserial'];
	$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$name'");
	$row2 = $image->fetch_assoc();

	if ($row2 != null){
	$imagepath=$row2['image'];
	}
	else{
	$imagepath = "";
	}

	echo"<div id='cartdet'><table style='width:100%;margin-left:40px;'><tr><td style='width:30%;'><div id='cartimg'><img src='$imagepath' style='margin-left:50%;' alt='$name'></div></td><td><p>Product Name: <i>$name</i></p><p>Unit Price: <i>Kshs. $price</i></p><p>Units Ordered: <i>$amount</i></p><p>Total Price: <i>Kshs. $totalprice</i></p><p>Serial Number: <i>$productserial</i></p></td></tr></table></div>";
}
}
 ?>
</div>

</body>
</html>
