<?php
include 'config.php';
$plan=$_GET['plan'];
$image = $_GET['image'];
if( isset($_POST['acp']))
   {
     $deadline= $_POST["deadline"];
     $employee= $_POST["employee"];
     $note= $_POST["note"];

    $sql= "INSERT INTO lichtrinh (deadline,name,plan,note,image) VALUES ('$deadline','$employee','$plan','$note','$image')";
   
     if(mysqli_query($conn,$sql))
     {
        echo "<script>alert('Tạo đợt kiểm tra thanh công!'); window.location = 'danh_sach_lich_trinh.php'</script>";
        $sql="DELETE FROM nhap";
        mysqli_query($conn,$sql);
     }
    else
    {
        echo "<script>alert('Tạo đợt kiểm tra không thành công vui lòng thử lại sau!'); window.location = 'ban_nhap_lich_trinh.php'</script>";
      
    }
}
?>