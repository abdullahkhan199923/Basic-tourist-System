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
          <a class="nav-link" href="userfront.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="Allplaces.php">AllPlaces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userquestionary.php">Suitable Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link confirm" href="logoutuser.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


 <div class="container">
        <div class="row">
            <div class="col-md-12">
             <form action="placeinfo.php" method="POST" style="border:1px solid #ccc">

  <div class="container">
    

    <label for="ques"><b>ENTER PLACE NAME</b></label>
    <input type="text" class="form-control" placeholder="Enter place name" name="place" required>

  
<div class="btn-box">
                        <button  type="submit" id="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>



</form>
</div>
</div>
</div>


<script type="text/javascript">
    $('.confirm').on('click', function () {
        return confirm('Are you sure want to logout?');
    });
</script>


</body>
</html>
