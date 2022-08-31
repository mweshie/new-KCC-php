<?php
include('db.php');
$query = "select * from category";
$ses_sql=mysqli_query($con,$query);
$result = $con->query($query);
$x = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$catname=$row['categoryname'];
	$type = $row['Type'];
	$number = $row['No'];
	$time = $row['thedate'];
	$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$catname'");
	$row2 = $image->fetch_assoc();
	$imagepath=$row2['image'];


	if ($type == "published") {
		echo "<tr><td>$x</td><td id='photo'><img src='$imagepath'></td><td>$catname</td><td class='publish'>$type</td><td>$time</td><td id='edit'><a href='deletecat.php?value=$number'><button class='btn btn-danger btn-sm' style='margin-right:5px;'><i class='fa fa-trash'></i></button></a><a href='editcat.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
	}
	elseif ($type == "unpublished" ) {
		echo "<tr><td>$x</td><td id='photo'><img src='$imagepath'></td><td>$catname</td><td class='unpublish'>$type</td><td>$time</td><td id='edit'><a href='deletecat.php?value=$number'><button class='btn btn-danger btn-sm' style='margin-right:5px;'><i class='fa fa-trash'></i></button></a><a href='editcat.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-arrow-right'></i></button></a></td></tr>";
	}

	$x++;
    }
} else {
    echo "0 results";
}

?>
