<?php
include "config.php";
if(!$conn){
	header("location: danh_sach_tram.php");
}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["insert"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 15000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		$name=$_POST['name'];
        $address=$_POST['address'];
        $status=$_POST['status'];
		$description =$_POST['description'];
		$image_name=basename( $_FILES["image"]["name"]);
		$sql= "INSERT INTO project (name,address,status,description, image) values ('$name','$address','$status','$description','$image_name')";
		if(mysqli_query($conn,$sql)){
			header("location: danh_sach_tram.php");
		}else{
            echo "Sorry, there was an error uploading your file.";
		}	
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
