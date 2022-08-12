<?php
 include ('Database/config.php');
 include ('security.php');

 
if(isset($_POST['register_student'])){

    $student_name = $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_phone = $_POST['student_phone'];
    $student_id = $_POST['student_id'];
    $student_department = $_POST['student_department'];
    $student_dob = $_POST['student_dob'];
    $student_password = $_POST['student_password'];
    $student_cfpassword = $_POST['student_cfpassword'];
    $student_avater = $_FILES['student_avater'];

    $imageLocation = $_FILES['teacher_photo']['tmp_name'];
    $imageName = $_FILES['teacher_photo']['name'];
    $image_des = "upload/".$imageName;
    
if(!empty($student_name) && !empty($student_email) && !empty($student_phone) && !empty($student_id) && !empty($student_department) && !empty($student_dob)  && !empty($student_password) && !empty($student_avater) && !empty($student_cfpassword)){

    $query = "INSERT INTO `student_register`(`student_name`, `student_email`, `student_phone`, `student_id`, `student_department`, `student_dob`, `student_password`, `student_avater`) VALUES ('$student_name','$student_email','$student_phone','$student_id','$student_department','$student_dob','$student_password','$image_des')";

    $query_run = mysqli_query($db_conn, $query);

    if($query_run){

        move_uploaded_file($imageLocation,$image_des);

        echo "<script>alert(' Insert');</script>";
            echo "<script>location.href='student_register_form.php';</script>";


    }
    else{
        echo "<script>alert('Not Insert');</script>";
       
    }

 }else{
    echo "<script>alert('Not Insert');</script>";
 }


}else {
    
    echo "<script>alert('Not Insert');</script>";
}

 ?>