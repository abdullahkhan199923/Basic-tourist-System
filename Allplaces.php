<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginuser.html");
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  
  
  <style>
  /* Make the image fully responsive */
  .carousel-indicators li{
         border-color:#222;
        }
  .carousel-inner img {
      width: 100%;
      height: 50%;
  }
 
  img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
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
          <a class="nav-link" href="userfront.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Allplaces.php">AllPlaces</a>
        </li>
		 <li class="nav-item ">
          <a class="nav-link" href="userquestionary.php">Suitable Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link confirm" href="logoutuser.php ">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


 <div class="site-section"><div class="container"><div class="row" >
 <?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'testdb');
$q="select * from addp";
$result=mysqli_query($con,$q);
          



while($row=mysqli_fetch_array($result)){
            ?>
			 
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="card hovercard">
					<div class="cardheader">
					<div class="avatar">
<?php print"	<img src='images/" . $row['img'] . "' >"?>
</div>
</div>
<div class="card-body info">
		<div class="title">
		<h3><?php echo $row['name']; ?></h3>
		</div>
		<div class="desc">	

            <b>Description:</b><?php echo $row['de']; ?>
			<br>
			<b>Area:</b><?php echo $row['area']; ?>
			<br>
			<b>LocationType:</b><?php echo $row['loctype']; ?>
			<br>
			<b>Things to Do:</b><?php echo $row['thingstodo']; ?>
			</div>			
			<div class="meta"><a href="locplot.php?id=<?php echo $row['name']; ?>" class="btn btn-primary btn-sm" rel="publisher">Click for map Location</a></div>
                   
				
              
            
           </div>
			</div>
			</div>







		
<?php }?>


</body>

<script type="text/javascript">
    $('.confirm').on('click', function () {
        return confirm('Are you sure want to logout?');
    });
</script>
</html>