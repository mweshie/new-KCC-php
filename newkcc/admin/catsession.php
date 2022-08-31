<?php
include('db.php');
$query = "select * from category";
$ses_sql=mysqli_query($con,$query);
$result = $con->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$catname=$row['categoryname'];
	echo "<option  value='$catname'</option>";   
    }
} else {
    echo "0 results";
}

?>