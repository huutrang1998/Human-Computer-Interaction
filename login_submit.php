

<?php
  include 'config.php';
   if( isset($_POST['acp']) &&  $_POST["username"] != '' && $_POST["password"] != '')
   {
     $username= $_POST["username"];
     $password= $_POST["password"];
     $password= md5($password);
    
     $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
     $user= mysqli_query($conn,$sql);
     if(mysqli_num_rows($user)>0){
         
      $row = mysqli_fetch_assoc($user);
    
      $_SESSION['name']=$row['username'];
      $_SESSION['id']=$row['id'];
      $_SESSION['fullname']=$row['fullname'];
      $_SESSION['email']=$row['email'];
      $_SESSION['phonenumber']=$row['phonenumber'];
      $_SESSION['state']=$row['state'];
     if($_SESSION['name']=="admin"){
      header("location:danh_sach_tram.php");
      }
      else{
        header("location:cong_viec.php");
     }
     }
     else
     {
      echo "<script>alert('Username or password incorrect!'); window.location = 'login.php'</script>";
     }
   }
   else{
   header("location:login.php");
   }
?>  