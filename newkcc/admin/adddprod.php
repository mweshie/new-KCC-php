
<?php
include('db.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 1000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 $name=$_POST['name'];
 $price=$_POST['price'];
 $discount = $_POST['discount'];
 $type = $_POST['type'];
 $stock=$_POST['stock'];
 $description=$_POST['desc'];
 $status=$_POST['status'];
 $category=$_POST['category'];
 echo "$description";
 $time = date("Y-m-d");
 if(mysqli_query($con,"INSERT INTO products(Name,Category,Type,Price,Discount,Stock,Status,thedate,description)VALUES('$name', '$category','$type', '$price','$discount', '$stock','$status','$time','$description')")){
 	mysqli_query($con,"INSERT INTO product_image(product_name,image)VALUES('$name','$target_file')");
 header("location: Products.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: Products.php?remarks=error&value=$e");
 }
 ?>
