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
       $newStatus =$_POST['status'];
       $newDescription =$_POST['description'];
       if($newName==null & $newPrice==null & $tag==null & $rate==null & $newDescription==null)
       {
           header("location: project_update.php");
       }
       else
       {
       if($newName!=null)
       {
           $sql= "UPDATE project SET name ='$newName' WHERE id=$id";
           mysqli_query($conn,$sql);
       }
       if($newStatus!=null)
       {
        $sql= "UPDATE project SET status ='$newStatus' WHERE id=$id";
        mysqli_query($conn,$sql);
       }
        if($newDescription!=null)
        {
            $sql= "UPDATE project SET description ='$newDescription' WHERE id=$id";
            mysqli_query($conn,$sql);
        }
        header("location: project_detail.php?id=".$id);
        }
        }
        }
  ?>