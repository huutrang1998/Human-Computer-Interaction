<?php
include "config.php";
$id = $_GET['id'];
if ((isset($_SESSION['name']) == false) || ($_SESSION['name'] != "admin")) {
    header("location:login.php");
}
else
{
    if(isset($_POST['acp'])==true)
    {
       $newName=$_POST['name'];
       $newDeadline =$_POST['status'];
       $newNote =$_POST['description'];
       if($newName==null & $newPrice==null & $tag==null & $rate==null & $newDescription==null)
       {
           header("location: danh_sach_lich_trinh.php");
       }
       else
       {
       if($newName!=null)
       {
           $sql= "UPDATE lichtrinh SET name ='$newName' WHERE id=$id";
           mysqli_query($conn,$sql);
       }
       if($newDeadline!=null)
       {
        $sql= "UPDATE lichtrinh SET deadline ='$newDeadline' WHERE id=$id";
        mysqli_query($conn,$sql);
       }
        if($newNote!=null)
        {
            $sql= "UPDATE lichtrinh SET note ='$newNote' WHERE id=$id";
            mysqli_query($conn,$sql);
        }
        header("location: lichtrinh_detail.php?id=".$id);
        }
        }
        }
  ?>