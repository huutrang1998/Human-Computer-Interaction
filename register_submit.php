
<?php
  include 'config.php';
   if( isset($_POST['acp']))
   {
     $fullname= $_POST["fullname"];
     $email= $_POST["email"];
     $username= $_POST["username"];
     $password= $_POST["password"];
     $repassword= $_POST["repassword"];
     $phonenumber= $_POST["phonenumber"];
     $age= $_POST["age"];
     $previous = "javascript:history.go(-1)";
     if($password!=$repassword)
     {
       echo "<script>alert('Check your password and confirm password!'); window.location = '".$previous."'</script>";
     }
     else
     {
     $password=md5($password);

     $sql=" SELECT * FROM user where username = '$username' ";
     $old = mysqli_query($conn,$sql);
     if(mysqli_num_rows($old)>0){
      echo "<script>alert('Username already exists!'); window.location = '".$previous."'</script>";
     }
     else{
     $sql = "INSERT INTO user  (fullname,email,username,password,phonenumber,age,state) 
     VALUES ('$fullname','$email','$username','$password','$phonenumber','$age',null)"; 
     if(mysqli_query($conn,$sql))
     {
       $nhanto ="<strong>".$fullname."</strong>";
       $hanhdong ="đã đăng ký tài khoản trên teamtwo với tên đăng nhập là <strong>".$username."</strong";
       $sql2 =" INSERT INTO notification (nhanto,hanhdong) VALUES ('$nhanto','$hanhdong')";
       mysqli_query($conn,$sql2);
        echo "<script>alert('Successfully registered! Please login for more info!'); window.location = 'login.php'</script>";
     }
     }
    }
   }
   else{
     header("location:register.php");
   }
?>  