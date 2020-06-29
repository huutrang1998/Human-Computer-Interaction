<?php
include "login_require.php";
?>
<?php
$id = $_GET['id'];
    $sql = "DELETE FROM lichtrinh WHERE id = $id"; 
    if (mysqli_query($conn, $sql)) {
        header("location: danh_sach_lich_trinh.php");
         exit;
     } else {
         echo '<script>alert("Something wrong, try again");</script>';
     }
?>