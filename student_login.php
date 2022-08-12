<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> University Project Thesis Manager</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register_page.css">

    <style>
      .status_message {
        font-size: 20px;
        color: white;
        background: #00b894;
        padding: 15px 0;
        border-radius: 5px;
        margin: 15px 0;
    }
    .empty_message {
        font-size: 20px;
        color: white;
        background: red;
        padding: 15px 0;
        border-radius: 5px;
        margin: 15px 0;
    }
    button:focus{
      outline: none;
    }
    .register-form #register-btn:hover {
    background: white;
    border-radius: 23.011px;
    width: 391.19px;
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 44px;
    color: #84C7AE;
    box-shadow: 0px 1px 8px 3px #17a2b814;
    margin: 10px 0;
}
    </style>
  </head>
  <body>
    
     <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 md-auto">
        <div class="container registration-form">
        <div class="row">

            <div class="col-lg-10 m-auto">
              <div class="form-info text-center">
              <?php 
               session_start();
                if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                  echo '<h6 class="text-center status_message">'. $_SESSION['status'].'</h6>';
                  unset($_SESSION['status']);
                  
                }else if(isset($_SESSION['login_error']) && $_SESSION['login_error'] !=''){
                  echo '<h6 class="text-center empty_message">'. $_SESSION['login_error'].'</h6>';
                  unset($_SESSION['login_error']);
                  
                }
               ?>
                <h4>Login with Student Account</h4>
                <p>This is only for <span>Leading University </span> Student</p>
                
              </div>
                <form action="student_action.php" method="post" enctype="multipart/form-data">
                  <div class="register-form">

                       <div class="form-group">
                        <input type="hidden" class='form-control' name='student_name' placeholder='Student Name' require value="<?php echo $_SESSION['name']; ?>">
                        
                      </div>
                      
                      <div class="form-group">                    
                        <input type="text" class='form-control' name='student_id' placeholder='Stuent Id.' require>
                      </div>
                                 
                      <div class="form-group">               
                        <input type="password" class='form-control' name='student_password' placeholder='Password' require>
                      </div>
                        
                      <div class="submit-regiter text-center">
                        <button type='submit' name='login_student' id='register-btn'>Login</button>
                      </div> 

                    </div>

              </form>

              <div class="info text-center">
                  <p>Already Have An Student Account? <a href='student_register_form.php'>Sign Up</a></p>
               </div>
              
          </div>
          
        </div>
      </div>
        </div>
      </div>

      

     </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 
  </body>
</html>
