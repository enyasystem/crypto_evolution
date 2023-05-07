<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login and Registration Sliding Form</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body><br>
<br>
<br>
<br>
<br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#login" data-toggle="tab"><i class="fas fa-sign-in-alt"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#register" data-toggle="tab"><i class="fas fa-user-plus"></i> Register</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="login">
                <form action="http://localhost/finexo-html/action/auth.php" method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
              </div>
              <div class="tab-pane" id="register">
                <form action="register.php" method="post">
                  <div class="form-group">
                    <label for="name">Username</label>
                    <input span type="text" placeholder=""  class="form-control" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <input span type="text" placeholder=""  class="form-control" name="firstname" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input span type="text" placeholder=""  class="form-control" name="lastname" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm-password" required>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css"> -->
    <!-- Fontawesome CDN Link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body> 
   <a href="index.php"><button class="fas fa-home home"> Back</button></a> --> 

    <!-- end header section -->

  <!-- <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front"> -->
        <!-- <img src="images/w2.jpg" alt=""> -->
        <!-- <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div> -->
      <!-- </div>
      <div class="back"> -->
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <!-- <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div> -->
    <!-- <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="./action/auth.php" method="POST" class="text-center">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div><Br><br><br><Br><br><br><br><br><Br><br><br>
              <div class="button input-box">
                <input class="text-center" type="submit" name="submit" value="Signin">
              </div>
              <div class="text sign-up-text" <style {font-size:30px; </style>>Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form> -->
      <!-- </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="register.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="firstname" placeholder="First Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" placeholder="Last Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
              </div>
               -->
              <!-- <div class="input-box">
                <i class="fas fa-phone"></i>
                <input type="text" name="phone_number" placeholder="Phone Number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Create Account">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>

