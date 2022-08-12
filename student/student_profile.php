<?php
include ('../Database/config.php');
include '../stu_security.php';
include ('includes/header.php');
include ('includes/navbar.php');

$student_id = $_SESSION['st_id'];
$query = mysqli_query($db_conn,"SELECT * FROM `student_panel` WHERE `st_id` = '$student_id'") or die('query failed');
 if(mysqli_num_rows($query) > 0){
    $fetch = mysqli_fetch_assoc($query);
}
?>


<!-- Page Heading -->
 

<div class="container-fluid student-profile-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="profile-card">
                    <div class="profile-card-inner">
                        <div class="profile-image">
                           
                            <img src="<?php echo $fetch['profile'] ?>" alt="Profile">
                        </div>
                        <div class="profile-name">
                            <h4><?php echo $fetch['name']; ?></h4>
                        </div>
                        <div class="profile-info">
                            <div class="row">
                                <div class="col-md-6 m-auto">
                                    <h5>Email Address  </h5>
                                    <h5>Phone Number  </h5>
                                    <h5>Student ID No.  </h5>
                                    <h5>Department </h5>
                                    <h5>Date of Birth </h5>
                                    <h5>Password  </h5>
                                   
                                     
                                </div>
                                <div class="col-md-6 m-auto">
                                    <h5><?php echo ": ".$fetch['email']; ?></h5>
                                    <h5><?php echo ": ".$fetch['phone']; ?></h5>
                                    <h5><?php echo ": ".$fetch['st_id']; ?></h5>
                                    <h5><?php echo ": ".$fetch['department']; ?></h5>
                                    <h5><?php echo ": ".$fetch['dob']; ?></h5>
                                    <h5><?php echo ": ".$fetch['password']; ?></h5>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 
  
<?php
include ('includes/script.php');
include ('includes/footer.php');
?>