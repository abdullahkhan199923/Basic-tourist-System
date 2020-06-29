<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginadmint.html");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-indicators li{
         border-color:#222;
        }
  .carousel-inner img {
      width: 100%;
      height: 50%;
  }
 


  div {
    width:100%;
    height:50%;
    float:left;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="3A logo.jpg" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

         <li class="nav-item">
          <a class="nav-link" href="addq.php">Add Question</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="addpfinal.php">Add Places</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewuser.php">View User</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="viewfeedback.php">View Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link confirm" href="logoutadmin.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 





<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imaget\ooty.jpg" alt="Los Angeles" width="110" height="150">
    </div>
    <div class="carousel-item">
      <img src="imaget\rajastan.jpg" alt="Chicago" width="110" height="150">
    </div>
    <div class="carousel-item">
      <img src="imaget\beaches-ocho-rios.jpg" alt="New York" width="110" height="150">
    </div>
  <div class="carousel-item">
      <img src="imaget\Kodaikanal.jpg" alt="New York" width="110" height="150">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>


<?php

echo "<script type='text/javascript'>alert('Login Successfully!')</script>";

?>
<script type="text/javascript">
    $('.confirm').on('click', function () {
        return confirm('Are you sure want to logout?');
    });
</script>