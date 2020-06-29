<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginadmint.html");
    die();
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>

 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

#map {
        height: 100%;
      }



</style>

</head>
<body>
<div id="content">
  
  <form method="POST" action="addpdemo.php" enctype="multipart/form-data">

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
       
        <li class="nav-item active">
          <a class="nav-link" href="addpfinal.php">Add Places</a>
        </li>
        
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

 

  <div class="container">
        <div class="row">
            <div class="col-md-12">
             <form action="addpdemo.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>ADD PLACES</h1>
    <p>Please fill in this form to add.</p>
    <hr>


    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="EnterName" name="name" required>

    
    <label for="add"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="addr" required>

    <label for="area"><b>Area</b></label>
    <input type="text" placeholder="Enter Area" name="area" required>

     <label for="tag"><b>Tags</b></label>
    <input type="text" placeholder="Enter Tag" name="tags" required>

     <label for="desc"><b>Description</b></label>
    <input type="text" placeholder="Description" name="de" required>

      <label for="desc"><b>Type of location</b></label>
    <input type="text" placeholder="Type of location" name="loctype" required>
     
      <label for="desc"><b>Things to do</b></label>
    <input type="text" placeholder="Things to do" name="thingstodo" required>

      <label for="accm"><b>Accomodation</b></label>
    <input type="text" placeholder="Accomodation" name="accom" required>
    <label for="bs"><b>Best_Season</b></label>
    <input type="text" placeholder="Accomodation" name="bs" required>


    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
    <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="image_text" 
        placeholder="Say something about this image..."></textarea>
    </div>
  
    <div>Latitude <input type="text" id="la" name="lat" value="28.39"> 
      Longitude<input type="text" id="lo" name="lon" value="84.12"></div>
      <div style="width: 640px; height: 480px" id="map"></div>
          


  <div>
      <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" name="upload" class="signupbtn">Add</button>

    </div>

 

  </form>


    
    <script>
  function initMap() {
    var lat = Number(document.getElementById("la").value);
    var lang = Number(document.getElementById("lo").value);
    var myLatLng = {lat: lat, lng: lang};

    var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 6,
                                    center: myLatLng,
                                    mapTypeId: google.maps.MapTypeId.HYBRID
                                    }
    );

    var marker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      draggable:true,
                      }
    );

    google.maps.event.addListener(marker, 'dragend', function(marker){
                                var latLng = marker.latLng; 
                                document.getElementById("la").value = latLng.lat();
                                document.getElementById("lo").value = latLng.lng();
                              }
     ); 

  }</script>

    <script 
    src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap">
    </script>


</div>
</body>
</html>

<script type="text/javascript">
    $('.confirm').on('click', function () {
        return confirm('Are you sure want to logout?');
    });
</script>