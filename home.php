<?php
session_start();
if(isset($_SESSION['email'])){
    echo "Welcome ".$_SESSION['email'];
  
    echo "<a href='logout.php'<button>log Out</button></a><br>";
    echo "<a href='admin/login.php'<button>Admin Login</button></a>";
    
}
else{
 echo "<script>alert('Page is secured')</script>";
 echo "<script>location.href='index.php'</script>";
}
 
?>