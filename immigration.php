<?php
echo "<P> <script type='text/javascript'>alert:(you must first be registered to apply for a passport)</script></P>";
  $servername = "localhost";
  $user = "root";
  $pass = "";
  $db = "immigration";//database name create one 
  //connecting to the database
  $conn = new mysqli($servername,$user,$pass,$db) or die("unable to connect to database");
if(isset($_POST['submit']))
{
    $idnumz = $_POST['idnum'];
    $benumz = $_POST['benum']; 
    $surnamez = $_POST['surname'];
    $fnamez = $_POST['fname'];
    $namechangz = $_POST['namechang'];
    $chngtimesz =$_POST['chngtimes'];
    $maritalz = $_POST['marital'];
    $sexz = $_POST['sex'];
    $dobz = $_POST['dob'];
    $countryz = $_POST['country'];
    $dateofmz = $_POST['dateofm'];
    $spousenamez = $_POST['spousename'];
    $placeofmz = $_POST['placeofm'];
    $spousez = $_POST['spouse'];
    $marriedoncez = $_POST['marriedonce'];
    $kinz = $_POST['kin'];
    $kinrelz = $_POST['kinrel'];
    $kinresz = $_POST['kinres'];
    $kinnumz = $_POST['kinnum'];
    $citizenshipz = $_POST['citizenship'];
    $radiotravz = $_POST['radiotrav'];
    $foreignpassz = $_POST['foreignpass'];
    $fpdetailsz = $_POST['fpdetails'];
    $radiobrz = $_POST['radiobr'];
    $paspnoz = $_POST['paspno'];
    $lostpassnoz = $_POST['lostpassno'];
    $issdatez = $_POST['issdate'];
    $bnamez = $_POST['bname'];
    $lostreasonz = $_POST['lostreason'];

    $query  = "INSERT INTO appform (idnum, benum, surname, fname, namechng, chngtimes, marital, sex, dob, country, dateofm, spousename, placeofm, spouse, marriedonce, kin, kinrel, kinres, kinnum, citizenship, radiotrav, foreignpass, fpdetails, radiobr, paspno, lostpassno, issdate, bname, lostreason) VALUES($idnumz, $benumz,$surnamez,$fnamez,$namechangz,$chngtimesz,$maritalz,$sexz,$dobz,$countryz,$dateofmz,$spousenamez,$placeofmz, $spousez,$marriedoncez,$kinz,$kinrelz,$kinresz,$kinnumz,$citizenshipz,$radiotravz,$foreignpassz,$fpdetailsz,$radiobrz,$paspnoz,$lostpassnoz,$issdatez,$bnamez,$lostreasonz)";

    $result = $conn->query($query);  
        if (!$result) die ("Database access failed: " . $conn->error); 
}
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <title>Zimbabwe Online Passport Application</title>

  <link href="bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/styles.css" rel="stylesheet">
  <script src="/bs/jquery/jquery.min.js"></script>
</head>

<body>
  <!-- Navigation -->
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
  <!--End Navigation-->
  <br>
  <br>
  <br>
  <div class="container jumbotron">
    <h2 align="center">Your information has been successfully recorded and added. Feel free to browse around the site
      to learn more about the immigration Department</h2>
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

          <h5 class="text-uppercase foot" style="color: white">Links</h5>
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