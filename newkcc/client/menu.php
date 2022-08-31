
<div id="menu" class="menu">
		
		<div id="header">
			<button class="btn btn-sm btn-light" style="position: absolute; right: 0px; top: 0px;z-index: 20;" onclick="openmenu()" id="closemenu"><i class="fa fa-times"></i></button>
            <a href="index.php"><img id="logo" src="Files/kcc logo.jpg">
            <!--<p id="name">NEW KCC STORE</p>-->
            </a>
		</div>
		
		<div id="menuitems">
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
				//$imagepath=$row2['image'];
				echo "<a href='category.php?category=$catname' id='menuitem'><p>$catname</p></a>";
			}	
			}
		?>
</div>
	</div>
	