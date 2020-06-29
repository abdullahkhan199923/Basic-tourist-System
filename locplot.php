<?php
$id=$_GET['id'];
echo"welcome";
echo" to ";
echo $id;

$con = mysqli_connect('localhost', 'root') ;
mysqli_select_db($con,'testdb');

$q="select DISTINCT lat,lon from addp where name='$id'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result)){
$lat= $row['lat'];
$lan= $row['lon'];
	}

?>



<html>

  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that
     contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    
    
    <div id="map"></div>
            
</form>
    <script>


  function initMap() {
    var lat = <?php echo $lat ?>;
    var lang = <?php echo $lan ?>;
    var myLatLng = {lat: lat, lng: lang};

    var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 8,
                                    center: myLatLng,
                                    mapTypeId: google.maps.MapTypeId.HYBRID
                                    }
    );

    var marker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      draggable:false,
                      }
    );

 

  }
    </script>
  
</form>

    <script 
    src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap">
    </script>
  </body>
</html>