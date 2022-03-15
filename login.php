<?php
   session_start();
   echo"<script type=”text/javascript”>
      alert(“hi”);
  </script>";
   if(isset($_POST["Login"])) {
      // username and password sent from form 
      $db = mysqli_connect("localhost","root","","immigration");
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
   /*if (empty($username)) {
    array_push($errors, "Username is required");
   }//THIS WILL BE USED INCASE THE LOGIN FORM REQUIRED ATTRIBUTE ISN'T PLACED
   if (empty($password)) {
    echo "Password is required";
   }*/
   if($count == 1) {
     session_register("username");
     $_SESSION['login_user'] = $username; 
     header("location:passportapp.html");
   } else {
     echo "Your Login Name or Password is invalid";
   }   
      $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
   }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
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
  <br>
  <!--Begin form--->
  <div class="row">
    <div class="col col-4">

    </div>
    <div class="col col-4 jumbotron">
      <div class="header">
        <h2 align="center">Login to access your data</h2>
        <p><i>Please enter your login details to access your data</i></p>
      </div>

      <form method="post" action="passportapp.html">
        <div class="input-group">
          <label>Username: </label>
          <input type="text" name="username" required>
        </div>
        <br>
        <div class="input-group">
          <br>
          <label>Password: </label>
          <input type="password" name="password" required>
        </div>
        <br>
        <div class="input-group">
          <button type="submit" class="btn-dark primary" name="login_user">Login</button>
        </div>
        <br>
        <p align="center">
          <i>
            Not yet a member? <a href="registration.php">Sign up</a>
          </i>
        </p>
      </form>
    </div>
    <div class="col col-4">
    </div>
  </div>
</body>
<footer class="page-footer font-small bg-dark pt-4">
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <div class="row">

      <div class="col-lg-6 mt-md-0 mt-3">

        <h5 class="text-uppercase foot" style="color: white">The Department you can trust</h5>
        <br>
        <p class="foot" style="color: white">If you encounter any problems while using this site, please don't hesitate
          to contact the
          department to
          give your feeback</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="col-md-3 mb-md-0 mb-3"></div>

      <div class="col-md-3 mb-md-0 mb-3">

        <h5 class="text-uppercase foot" style="color:white">Links</h5>
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