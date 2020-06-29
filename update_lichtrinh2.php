<?php
include "config.php";
$id = $_GET['id'];

    if(isset($_POST['acp'])==true)
    {
       $newStatus=$_POST['name'];
     
      
       if($newStatus!=null)
       {
        $sql= "UPDATE lichtrinh SET status ='$newStatus' WHERE id=$id";
        mysqli_query($conn,$sql);
      $nhanto = "<strong>".$_SESSION["fullname"]."</strong>";
      $hanhdong =" đã cập nhật tiến độ cho lịch trình kiểm tra số ".$id . " là <strong>". $newStatus."</strong>";
        $sql2 =" INSERT INTO notification (nhanto,hanhdong) VALUES ('$nhanto','$hanhdong')";
        mysqli_query($conn,$sql2);
       }
        
        header("location: lichtrinh_detail2.php?id=".$id);
        }
  ?>