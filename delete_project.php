<?php
include "login_require.php";
?>
<?php
$id = $_GET['id'];
$sql="SELECT * FROM project WHERE id=$id";
$result=mysqli_query($conn,$sql);
$filename=mysqli_fetch_assoc($result)['image'];
if (file_exists("./uploads/".$filename)) {
    unlink("./uploads/".$filename);
    $sql = "DELETE FROM project WHERE id = $id"; 
    if (mysqli_query($conn, $sql)) {
        header("location: danh_sach_tram.php");
         exit;
     } else {
         echo '<script>alert("Something wrong, try again");</script>';
     }
  } else {
      echo $filename;
    echo '<script>alert("Xoá file sản phẩm không thành công");</script>';
  }
?>