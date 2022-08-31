<style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
	position: absolute;
	top: 6%;
	border:1px dashed green;
	border-radius: 20px;
  width: 98%;
  height: 280px;
  margin: 5px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class='slideshow-container'>
		<?php

		include('db.php');
		$query = "SELECT * FROM category";
			$ses_sql=mysqli_query($con,$query);
			$result = $con->query($query);
			$count = mysqli_num_rows($result);
			$x = 1;
			for($count > 0;$count--;) {	
			    while($row = $result->fetch_assoc()) {
				$catname=$row['categoryname'];
				$type = $row['Type'];
				$number = $row['No'];
				$time = $row['thedate'];
				$image = mysqli_query($con,"SELECT image FROM product_image where product_name = '$catname'");
				$row2 = $image->fetch_assoc();
				$imagepath=$row2['image'];
				echo "<a href='category.php?category=$catname'>
				
					<div class='mySlides fade'>
					<h5 style='color:green; left:5%; position:absolute;font-family: \'Times New Roman\';'>$catname</h5>
						<div style='display:flex; justify-content:center;width:auto;height: 280px;align-self:center;'>
					  <img src='../admin/$imagepath' style=''>  
					  </div>
					</div>
					<div style='text-align:center;display: none;'>
					  <span class='dot'></span> 
					</div>
					</a>";	
				}
			$x++;
		}
		?>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	