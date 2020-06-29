<?php
include "login_require.php";
$id = $_GET['id'];
$sql = "DELETE FROM nhap WHERE projectID = $id"; 
if(mysqli_query($conn,$sql)){
    header("Location:ban_nhap_lich_trinh.php");
    }
?>