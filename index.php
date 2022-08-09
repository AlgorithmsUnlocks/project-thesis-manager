<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Project Thesis Manager</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register_page.css">
  </head>
  <body>
    
     <div class="container-fluid">
      <div class="container registration-form">
        <div class="row">

          <div class="col-md-12">
              <div class="form-info text-center">
                <h3>Create An Account</h3>
                <p>Create an account to enjoy all the services of <br/>Leading University</p>
              </div>
              <form action="user-register.php" method="post">
                  <div class="register-form">
                      <div class="form-group">

                        <input type="text" class='form-control' name='user_name' placeholder='User Name' require>
                      </div>
                      <div class="form-group">
                    
                        <input type="email" class='form-control' name='user_email' placeholder='Email Address' require>
                      </div>
                      <div class="form-group">
                    
                        <input type="text" class='form-control' name='user_phone' placeholder='Phone Number' require>
                      </div>
                      <div class="form-group">
                      
                        <input type="text" class='form-control' name='user_batch' placeholder='Your Batch' require>
                      </div>
                      <div class="form-group">
                      
                        <input type="text" class='form-control' name='user_section' placeholder='Your Sections' require>
                      </div>
                      <div class="form-group">
                      <select name="session" class='form-control'>
                        <option value="">Choose Your Session</option>
                        <option value="spring">Spring 2019-2022</option>
                        <option value="summer">Summer 2019-2022</option>
                        <option value="fall">Fall 2019-2022</option>
                        <option value="winter">Winter 2019-2022</option>
                        <option value="spring">Spring 2019-2022</option>
                        <option value="summer">Summer 2019-2022</option>
                        <option value="fall">Fall 2019-2022</option>
                        <option value="winter">Winter 2019-2022</option>
                      </select>
                        
                      </div>
                      <div class="form-group">
                      <select name="semester" class='form-control'>
                        <option value="">Choose Your Current Semester</option>
                        <option value="spring">Spring 2022</option>
                        <option value="summer">Summer 2022</option>
                        <option value="fall">Fall 2022</option>
                        <option value="winter">Winter 2022</option>
                        <option value="spring">Spring 2022</option>
                        <option value="summer">Summer 2022</option>
                        <option value="fall">Fall 2022</option>
                        <option value="winter">Winter 2022</option>
                        <option value="spring">Spring 2022</option>
                        <option value="summer">Summer 2022</option>
                        <option value="fall">Fall 2022</option>
                        <option value="winter">Winter 2022</option>
                        <option value="spring">Spring 2022</option>
                        <option value="summer">Summer 2022</option>
                        <option value="fall">Fall 2022</option>
                        <option value="winter">Winter 2022</option>
                      </select>
                        
                      </div>
                      
                      <div class="form-group col">
                          <label for="user-avater">Upload Your Profile Picture</label> &#123;
                          <input type="file" class='form-controls-file' name='user_avater' require>&#125;
                      </div>
                      <div class="form-group col">
                          <label for="user-idcard">Upload Your Student ID Card</label> &#123;
                          <input type="file" class='form-controls-file' name='user_id_card' require>&#125;
                      </div>
                  
                      
                      <div class="form-group">               
                        <input type="password" class='form-control' name='user_password' placeholder='Password' require>
                      </div>
                      <div class="form-group">
                        <input type="text" class='form-control' name='user_cfpassword'  placeholder='Confirm Password' require>
                      </div>
                      <div class="submit-regiter text-center">
                        <button type='submit' name='submit' id='register-btn'>Create Account</button>
                        <p>Already Have An Account? <a href='user-login.php'>Sign In</a></p>
                      </div> 
                    </div>

              </form>
              
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
