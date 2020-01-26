<?php include 'source/php/auth.php' ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "horkon";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO members (firstname, surname, password1, birthday, gender, email, country, job, horkonid, agreement)
VALUES ('$_POST[firstname]', '$_POST[surname]','$_POST[password1]', '$_POST[birthday]', '$_POST[gender]', '$_POST[email]', '$_POST[country]','$_POST[job]', '$_POST[horkonid]','$_POST[agreement]')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Horkon</title>
  <link rel="shortcut icon" type="image/png" href="source/img/Horkon Logo dark.png"/>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="source/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="source/animate.css">
<!-- Main CSS -->
<link rel="stylesheet" href="source/styles.css">
<link rel="stylesheet" href="source/dashbord.css">
</head>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="source/jquery.js"></script>
<script src="source/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="source/script.js"></script>
<script src="source/jquery_main.js"></script>
<body>
 <div class="container-full">
  <div class="header">
          <div class="social">
          </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="animated fadeInLeftBig">
  <a class="navbar-brand pl-xs-n5" href="index.html"><img src="source/img/Horkon Logo.svg" class="d-inline-block align-top"height="50" width="50" alt=""><h2 class=" text-white pl-5 pt-1 logotext">Hor<span style="color:rgb(255, 187, 0)">kon</span></h2></a>
  </div>

 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4  ">
<div class=" dropdown-divider mobile-divider d-lg-none d-md-none pl-n2"> </div>
      <li class="nav-item active">
<a class="nav-link animated fadeIn homenav" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
<a class="nav-link animated fadeIn aboutnav" href="#">About us</a>
      </li>
      <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle animated fadeIn sernav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Services
</a>
<div class="dropdown-menu drpstyle" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="#">Software Engineering</a>
  <a class="dropdown-item" href="#">Web Development</a>

  <a class="dropdown-item" href="#">Design</a>
</div>
      </li>
      <li class="nav-item">
<a class="nav-link animated fadeIn contnav" href="#" tabindex="-1">Contact us</a>
      </li>
      <div class=" d-none d-lg-block d-md-block">
<li class="nav-item">
<a class="nav-link animated fadeIn contnav active font-weight-bold login" href="index.php" tabindex="-1">Log Out</a>
</li>
</div>
    </ul>
  </div>
</nav> 

   </div>
  </div>




    </div>
</div>
<!-- Display on md,lg and xl screen only-->
<div class="d-none d-md-block d-lg-block d-xl-block">
  <div class="row">
    <div class="col-12">
      <div class="progress">
        <div class=" progress-bar progress-bar-sucess progress-bar-striped progress-bar-animated" role="progressbar"
        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
        </div>
      </div>
    </div>
    <div class="col-4 pt-3 dashsum pl-4">

      <h4 class=" text-white">Welcome <span class="font-weight-light"><?php
      echo $firstname ?></span> </h4>

<p class=" text-white font-weight-bold pb-n3">Job Position: <span class="font-weight-light"><?php
       echo $job ?></span> </p>

<p class=" text-white font-weight-bold">Age: <span class="font-weight-light"><?php
      $todayYear = 2019; $bYear = date('Y', strtotime($birthday));
      echo $todayYear - $bYear ?> Years Old</span> </p>
<p class=" text-white font-weight-bold">Gender: <span class="font-weight-light"><?php
      echo $gender ?></span> </p>

<p class=" text-white font-weight-bold">Email: <span class="font-weight-light"><?php
      echo $email ?></span> </p>

    </div>
    <div class="col-4 pt-5 dashsum">
    <p class=" text-white font-weight-bold pb-n3">Today: <span class="font-weight-light"><?php

      $date = date("l") .' '. date("d") .' '. date("Y") .' '. gmdate("h:i"); echo $date ?></span> </p>

<p class=" text-white font-weight-bold">Horkon ID: <span class="font-weight-light"><?php
      echo $horkonid ?></span> </p>
<p class=" text-white font-weight-bold">Horkon Grade: <span class="font-weight-light"><?php
      $grade ='Sub Executive Board Level 3';
      echo $grade ?></span> </p>

<p class=" text-white font-weight-bold">Session: <span class="font-weight-light"><?php
      $session = date("d") .' '. date("M").' '. date("Y");
      echo $session ?></span> </p>
    </div>
    <div class="col-4 pt-5 dashsum">
    <p class=" text-white font-weight-bold">Total Assigment: <span class="font-weight-light"><?php
      $totalassign = 20;
      echo $totalassign ?></span> </p>
    
    <p class=" text-white font-weight-bold"> Current Assignment: <span class="font-weight-light"><?php
      $currentassign = 2;
      echo $currentassign ?></span> </p>

    <p class=" text-white font-weight-bold"> Remaining Duty: <span class="font-weight-light"><?php
      $remainduty = 8;
      echo $remainduty ?></span> </p>

    <p class=" text-white font-weight-bold"> Accomplished Duty: <span class="font-weight-light"><?php
      $fullduty = $totalassign - $remainduty;
      echo $fullduty ?></span> </p>
    </div>
  </div>
<div class="row">
  <div class="col-3 col3bg">
    <h4 class="text-center bg-secondary text-white" style="width:105%;padding-bottom:6px;">Assignments</h4>
  </div>
  <div class="col-6 col6bg"><h4 class="text-center bg-secondary text-white" style="width:105%;padding-bottom:6px;margin-left:-15px">Assigments Plan</h4>
</div>
  <div class="col-3 col2bg"><h4 class="text-center bg-secondary text-white" style="width:105%;padding-bottom:6px;margin-left:-15px">Duty Property</h4>
</div>
</div>
</div>
<!-- Display on xs and sm screen only-->
<div class="d-md-none d-xs-block d-sm-block">
<div class="dashmob">
  <div class="card">
<div class="card-body">
  <h3 class="text-center">Sorry No Dashboard on Mobile </h3>
  <p class="text-center">Log on desktop to see your Dashbord</p>
  <div class="align-center align-content-center text-center">
  <button class="btn-primary rounded-top rounded-bottom btncss"><a style="text-decoration:none;"href="/index.html"><h4 class="text-white">Back to Home</h4></a></button>
</div>

</div>
  </div>
</div>
</div>

</div>
</div>

  
</div>

<div class=" bg-dark footer">
  <div class="row">
    <div class="col-9">
    <a class="navbar-brand pl-xs-n5 pl-2 pt-2" href="#"><img src="source/img/Horkon Logo.svg" class="d-inline-block align-top"height="50" width="50" alt=""><h2 class=" text-white pl-5 pt-1 logotext">Hor<span style="color:rgb(255, 187, 0)">kon</span></h2></a>
   </div>
    <div class="col-3">
      Hi
   </div>
   </div>
    <div class="hrmenu"></div>
    <div class="menufoot bg-dark">

  <div class="container-fluid">
<div class="row">
    <div class="col-2 collapse d-flex bg-dark pt-2 min-vh-50 pl-0" id="sidebar">
<ul class="nav flex-column flex-nowrap">
<div class=" navhover">
<li class="nav-item "><a class="nav-link text-white navhover" href="#">Home</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#">Software Engineering</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#" style="width:200px">Web Development</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#">Graphic Design</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
    </div>
    </div>
    </div>
    
</div>
</div>
<div class="social copyright"><small class="font-weight-normal">Horko International &copy; 2019</small></div>       
</div>
 </div>
</body>
</html>