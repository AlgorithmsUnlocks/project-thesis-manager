<?php
include ('security.php');
 include "Database/config.php";

 $user_name = $_POST['user_name'];
 $user_email = $_POST['user_email'];
 $user_phone = $_POST['user_phone'];
 $user_batch = $_POST['user_batch'];
 $user_section = $_POST['user_section'];
 $session = $_POST['session'];
 $semester = $_POST['semester'];
 $user_avater = $_POST['user_avater'];
 $user_id_card = $_POST['user_id_card'];
 $user_password = $_POST['user_password'];
 $user_cfpassword = $_POST['user_cfpassword'];

 // Regex Apply

 $_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
 $duplicate_user_name = mysqli_query($db_conn,"SELECT * FROM `user-register` WHERE `user-name`= '$user_name'");
 $duplicate_eamil = mysqli_query($db_conn,"SELECT * FROM `user-register` WHERE `email` = '$user_email'");
 $duplicate_phone = mysqli_query($db_conn,"SELECT * FROM `user-register` WHERE `phone` = '$user_phone'");

 


 $insert_query = "INSERT INTO `user-register`(`user-name`, `email`,`phone`, `batch`, `section`, `session`, `semester`, `profile-picture`, `id-card`, `password`) VALUES ('$user_name','$user_email','$user_phone','$user_batch','$user_section','$session','$semester','$user_avater','$user_id_card','$user_password')";


if(empty($user_name) || empty($user_email) || empty( $user_phone) || empty($user_batch) || empty($user_section) 
|| empty($session)  || empty($semester) || empty($user_avater) || empty( $user_id_card) || empty($user_password) 
|| empty($user_cfpassword)){
   echo "<script> alert('Empty Feild not Register')</script>";
   echo "<script>location.href='index.php'</script>";

}else if(strlen($user_name) <3 || strlen($user_name) >20){
   echo "<script> alert('User Name Contaions No Number Only Character')</script>";
   echo "<script>location.href='index.php'</script>";
}else if(!preg_match($_mobile_pattern,$user_phone)){
   echo "<script> alert('Not Insert Things')</script>";
   echo "<script>location.href='index.php'</script>";
}else if($user_password !== $user_cfpassword){
   echo "<script> alert('Password Not Match')</script>";
   echo "<script>location.href='index.php'</script>";
}else if(mysqli_num_rows($duplicate_user_name)){
   echo "<script>alert('Username already taken')</script>";
   echo "<script>location.href='index.php'</script>";
}else if(mysqli_num_rows($duplicate_eamil)){
   echo "<script>alert('Emial already registered')</script>";
   echo "<script>location.href='index.php'</script>";
}else if(mysqli_num_rows($duplicate_phone)){
   echo "<script>alert('Phone Number is not yours')</script>";
   echo "<script>location.href='index.php'</script>";
}
else{
   
   if(!mysqli_query($db_conn,$insert_query)){
      die("Not Insert".mysqli_connect_error());
   }else{
      echo "<script> alert('Registration is successfull')</script>";
      echo "<script> location.href='user-login.php'</script>";
   }
}

?>