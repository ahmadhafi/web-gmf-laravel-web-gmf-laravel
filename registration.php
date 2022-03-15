<?php
echo "<P> <script type='text/javascript'>alert:(you must first be registered to apply for a passport)</script></P>";
  $servername = "localhost";
  $user = "root";
  $pass = "";
  $db = "immigration";//database name create one 
  //connecting to the database
  $conn = new mysqli($servername,$user,$pass,$db) or die("unable to connect to database");
  session_start();
  
  if(isset($_POST['reg_user'])){
    $username= $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password =  $conn->real_escape_string($_POST['pass_1']);
    $pass_2 =  $conn->real_escape_string($_POST['pass_2']);
    if ($password == $pass_2) {
      //create user
      $password = md5($pass); //password encrypting
       $query  = "INSERT INTO users(username,email,password,confirmPass) VALUES('$username', '$email', '$password', '$pass_2')";
       $result = $conn->query($query);  
       if (!$result) die ("Database access failed: " . $conn->error); 
      $_SESSION['message'] = "you are now logged in as";
      $_SESSION['user'] = $user;
      header("location:passportapp.html"); //redirecting to the application form
    /*if (empty($username)) {
    	 echo "<script type='text/javascript'>alert:(Username is required);</script>";
   }
   if (empty($password)) {
    echo "<script type='text/javascript'>alert:(password is required);</script>";
   }
   if (empty($email)) {
    echo "<script type='text/javascript'>alert:(email is required);</script>";
   }
   
    }else{
      $_SESSION['message'] = "Passwords do not match";*/
    }
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration form</title>
  <link href="bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="/bs/jquery/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="./images/logo.png" alt="Registrer General Logo" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              About US
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="vision.html">Vision & Mission</a>
              <a class="dropdown-item" href="team.html">Team</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Application</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <br>
  <br>
  <!--Begin form--->
  <div class="header">
    <h2 align="center">Registration Form</h2>
    <p align="center"><i>To proceed to the passport application process, please register first</i></p>
  </div>
  <div class="row">
    <div class="col col-4">

    </div>
    <div class="col col-4">
      <form method="post" action="registration.php" align="center" class="jumbotron">
        <div class="input-group">
          <label>Username: </label>
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <br>
        <div class="input-group" align="right">
          <label>Email: </label>
          <input type="email" name="email" placeholder="email" required>
        </div>
        <br>
        <div class="input-group">
          <label>Password: </label>
          <input type="password" name="pass_1" placeholder="password" required>
        </div>
        <br>
        <div class="input-group">
          <label>Confirm password: </label>
          <input type="password" name="pass_2" placeholder="confirm password" required>
        </div>
        <br>
        <div class="input-group">
          <button type="submit" class="btn-dark" name="reg_user">Register</button>
        </div>
        <br>
        <p><i>
            Already a member? <a href="login.php">Sign in</a>
          </i></p>
      </form>
    </div>
    <div class="col col-4">

    </div>
  </div>
  <footer class="page-footer font-small bg-dark pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-lg-6 mt-md-0 mt-3">

          <h5 class="text-uppercase foot" style="color: white">The Department you can trust</h5>
          <br>
          <p class="foot" style="color: white">If you encounter any problems while using this site, please don't
            hesitate to contact the
            department to
            give your feeback</p>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3"></div>

        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase foot">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="immigration.php">Passport Application</a>
            </li>
            <li>
              <a href="vision.html">About US</a>
            </li>
            <li>
              <a href="contact.html">Contact US</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 foot" style="color: white">
      © 2018 Copyright: <a href="#">Zimbabwe Department of Immigration</a>
    </div>
  </footer>
</body>
<script src="bs/jquery/jquery.min.js"></script>
<script src="bs/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>