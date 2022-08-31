<?php 
include("db.php");
$query = "select * from category";
$ses_sql=mysqli_query($con,$query);
$result = $con->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$catname=$row['categoryname'];
	$sql = "select * from products where Category = '$catname'";
	$type = $row['Type'];
	$results = mysqli_query($con, $sql);
	$count = mysqli_num_rows($results);
	if ($count == Null) {
		$no = 0;
	}
	else{
		$no = $count;
	}
	$number = "$no"; 
	if ($type == "published") {
		echo "<div id='dash0'>$catname<p>$number</p></div>";
	}
	elseif ($type == "unpublished" ) {
		echo "<div id='dash'>$catname<p>$number</p></div>";
	}
    }
    
} 
 ?>