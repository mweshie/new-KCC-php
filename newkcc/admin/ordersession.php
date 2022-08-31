<?php
include('db.php');
$query = "SELECT * FROM order_details order by No DESC";
$ses_sql=mysqli_query($con,$query);
$result = $con->query($query);
$x = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $no = $row['No'];
	$buyer=$row['Buyer'];
	$code = $row['Code'];
	$totalcost = $row['Totalcost'];
	$datetoship = $row['shipdate'];
	$dateoforder = $row['orderdate'];
	$sqli = "SELECT * from product_order_details where Code ='$code'";
		$results1 = mysqli_query($con, $sqli);
		$count1 = mysqli_num_rows($results1);
		if ($count1 == Null) {
			$no1 = 0;
		}
		else{
			$no1 = $count1;
		}
	$status = $row['status'];

	if ($status == "waiting" or $status == null) {
		echo "
    <tr>
    <td>$x</td>
    <td>$buyer</td>
    <td>$code</td>
    <td>$totalcost</td><td>Not Delivered</td>
    <td>$dateoforder</td>
    <td>$no1</td>
    <td style='background-color:green;text-align:center;text-transform: uppercase;'>$status</td>
    <td style='align-content:center;'><a href='orderdet.php?order=$code'>
    <button class='btn btn-sm btn-info'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
	}
	elseif ($status == "processed") {
		echo "
    <tr>
    <td>$x</td>
    <td>$buyer</td>
    <td>$code</td>
    <td>$totalcost</td>
    <td>$datetoship</td>
    <td>$dateoforder</td>
    <td>$no1</td>
    <td  style='background-color:red; text-align:center;text-transform: uppercase;'>$status</td>
    <td style='align-content:center;'><a href='orderdet.php?order=$code'>
    <button class='btn btn-sm btn-info'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
	}
	$x++;
    }
} else {
    echo "0 results";
}

 ?>
