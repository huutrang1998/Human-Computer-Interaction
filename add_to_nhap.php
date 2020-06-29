<?php 
include "login_require.php";
$id=$_GET['id'];
$previous = "javascript:history.go(-1)";
$sql=" SELECT * FROM nhap where projectID = '$id' ";
     $old = mysqli_query($conn,$sql);
     if(mysqli_num_rows($old)>0){
      echo "<script>alert('Đã thêm trạm này vào lịch trình tạm thời!'); window.location = '".$previous."'</script>";
      exit;
     }
$sql = "INSERT INTO nhap  (projectID) VALUES ('$id')";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Thêm vào lịch trình nháp thành công! Cùng xem lại bản nháp nào!'); window.location = 'ban_nhap_lich_trinh.php'</script>";
    }
?>