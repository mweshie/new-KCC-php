
<?php 
include('db.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo '<div id="failed" class="fail">File: $check["mime"] is image<progress id="prog" value="0" max="1000"></progress></div> ';
        $uploadOk = 1;
    } else {
        echo '<div id="failed" class="fail">File is not an image.<progress id="prog" value="0" max="1000"></progress></div> ';
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo '<div id="failed" class="fail">File already exit<progress id="prog" value="0" max="1000"></progress></div> ';
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 100000000) {
    echo '
    <div id="failed" class="fail">Sorry, File is too big.<progress id="prog" value="0" max="1000"></progress></div> ';
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<div id="failed" class="fail">Wrong File format<progress id="prog" value="0" max="1000"></progress></div> ';
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo'<div id="failed" class="fail">File not uploaded<progress id="prog" value="0" max="1000"></progress></div> ';
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<div id="failed" class="fail">The file ". basename( $_FILES["fileToUpload"]["name"]). " uploaded<progress id="prog" value="0" max="1000"></progress></div> ';
    } else {
        echo '<div id="failed" class="fail">Error Uplaoding file<progress id="prog" value="0" max="1000"></progress></div> ';
    }
}
 $name=$_POST['catname'];
 $type = $_POST['cattype'];
 $time = date("Y-m-d");
 if(mysqli_query($con,"INSERT INTO category(categoryname,Type,thedate)VALUES('$name','$type','$time')")){ 
 	mysqli_query($con,"INSERT INTO product_image(product_name,image)VALUES('$name','$target_file')");
 header("location: Category.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: Category.php?remarks=error&value=$e");  
 }
 ?>