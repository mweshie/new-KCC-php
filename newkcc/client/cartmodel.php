<?php
session_start();
if ($_SESSION == Null) {
	header("location:index.php?remark_login=carterror");
}
else
{
include('db.php');
$userserial = $_SESSION['login_user'];
?>
<div class='modal' id='staticBackdropcart' role='dialog' tabindex='-1' aria-labelledby='staticBackdropLabelcart' aria-hidden='true'>
<div class='modal-dialog' style='width:auto; height:auto;'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title' id='staticBackdropLabelcart' style='text-transform:capitalize;'>My Cart</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='close'><span aria-hidden='true'>&times</span></button>
</div>
<div class='modal-body d-flex flex-column justify-content-center' style="height:450px;overflow-y: scroll;">
<?php include('cartproducts.php')  ?>
</div>
<div class='modal-footer'>

	<div id="">
		<h6>Total Cost: Kshs. 
	<?php
	include('db.php');
	$result = mysqli_query($con,"SELECT SUM(totalprice) AS value_sum FROM cart$userserial");
	$row = mysqli_fetch_assoc($result);
	if ($row != null) {
		$sum = $row['value_sum'];

		$sum =$sum + ($sum * 16/100);
		echo $sum;
	}
	else{
		$sum = 0;
		echo $sum;
	}
	?>
</h6>
</div>
	<a href="processpurchase.php"><button class="btn btn-info" style="">PROCEED TO CHECK OUT <i class="fa fa-arrow-right"></i></button></a>
	<a href="pdf.php"><button class="btn btn-outline-success"><i class="fa fa-download" style=""></i></button></a>

</div>
</div>
</div>
</div>
<?php
}
?>