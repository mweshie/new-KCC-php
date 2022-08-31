<?php
include('db.php');
$query = "select * from products";
$results = mysqli_query($con, $query);
$count = mysqli_num_rows($results);
$x=1;
for($count > 0;$count--;) {
    $row = mysqli_fetch_array($results);
	$number=$row['No'];
	$name=$row['Name'];
	$category=$row['Category'];
	$type=$row['Type'];
	$price=$row['Price'];
	$stock=$row['Stock'];
	$status=$row['Status'];
	$time=$row['thedate'];
	#$time = date("Y-m-d");
	if ($stock > 50 ) {
		echo "<tr><td>$x</td></td><td>$name</td><td>$type</td><td>$price</td><td>$stock</td><td id='ready'>READY ON STOCK</td><td>$time</td><td id='edit'><a href='javascript:void(0)' onclick='document.getElementById(\"pr$number\").style.display = \"block\"'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-alt'></i></button></a><a href='editprod.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button></a></td></tr><div id='pr$number' class='prdel'><p>Confirm<br>Want To Delete $name ?</p><a href='deleteprod.php?value=$number'><button id='yes'>Yes</button></a><button id='no' onclick='document.getElementById(\"pr$number\").style.display = \"none\"'>No</button></div>";
	}
	elseif ($stock <= 50 && $stock > 0) {
		echo  "<tr><td>$x</td></td><td>$name</td><td>$type</td><td>$price</td><td>$stock</td><td id='almost'>RUNNING OUT</td><td>$time</td><td id='edit'><a href='javascript:void(0)' onclick='document.getElementById(\"pr$number\").style.display = \"block\"'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-alt'></i></button></a><a href='editprod.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button></a></td></tr><div id='pr$number' class='prdel'><p>Confirm<br>Want To Delete $name ?</p><a href='deleteprod.php?value=$number'><button id='yes'>Yes</button></a><button id='no' onclick='document.getElementById(\"pr$number\").style.display = \"none\"'>No</button></div>";
	}
	elseif ($stock == 0 or $stock < 0 ) {
		echo "<tr><td>$x</td></td><td>$name</td><td>$type</td><td>$price</td><td>$stock</td><td id='outs'>OUT OF STOCK</td><td>$time</td><td id='edit'><a href='javascript:void(0)' onclick='document.getElementById(\"pr$number\").style.display = \"block\"'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-alt'></i></button></a><a href='editprod.php?value=$number'><button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button></a></td></tr><div id='pr$number' class='prdel'><p>Confirm<br>Want To Delete $name ?</p><a href='deleteprod.php?value=$number'><button id='yes'>Yes</button></a><button id='no' onclick='document.getElementById(\"pr$number\").style.display = \"none\"'>No</button></div>";
	}
	$x++;
    }

?>
