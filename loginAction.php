<?php
 include "Database/config.php";

 $l_user_email = $_POST['l_user_email'];
 $l_user_password = $_POST['l_user_password'];

 $result = mysqli_query($db_conn,"SELECT * FROM `user-register` WHERE email ='$l_user_email' And password ='$l_user_password' ");

 if(empty($l_user_email) || empty($l_user_password)){
    echo "<script>alert('Username and Password not type')</script>";
    echo "<script>location.href='user-login.php'</script>";

 }else if(mysqli_num_rows($result) >0){
     session_start();
     $_SESSION['email'] = $l_user_email;
     $_SESSION['password'] = $l_user_password;  
     echo "<script>location.href='student/index.php'</script>";
 }
 else{
     echo "<script>alert('Username and Password is not match to Database')</script>";
     echo "<script>location.href='user-login.php'</script>";
 }

?>