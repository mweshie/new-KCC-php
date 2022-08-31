<?php
include('db.php');
$query = "select * from currency";
$ses_sql=mysqli_query($con,$query);
$result = $con->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$currency=$row['Currency'];
	echo "<option  value='$currency'</option>";   
    }
} else {
    echo "0 results";
}

  ?>