
<?php
  
  $name='';
  $addr='';
  $area='';
  $tags='';
  $de='';
  $image='';
  $loctype='';
 
  $thingstodo='';
  $accom='';
  $bs='';
  $lat='';
  $lan='';

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "testdb");

  // Initialize message variable
  if(!$db)
  {
    echo 'not connected';
  }else{
    echo "connected";
  }




    if (isset($_POST['name'])) {

    $name = $_POST['name'];
  }

  if (isset($_POST['addr'])) {

    $addr = $_POST['addr'];
  }

      if (isset($_POST['area'])) {

    $area = $_POST['area'];
  }

  if (isset($_POST['tags'])) {

    $tags = $_POST['tags'];
  }


  if (isset($_POST['de'])) {

    $de = $_POST['de'];
  }


 if (isset($_POST['loctype'])) {

    $loctype = $_POST['loctype'];
  }




 if (isset($_POST['thingstodo'])) {

    $thingstodo = $_POST['thingstodo'];
  }

 if (isset($_POST['accom'])) {

    $accom = $_POST['accom'];
  }


 if (isset($_POST['bs'])) {

    $bs = $_POST['bs'];
  }

 if (isset($_POST['lat'])) {

    $lat = $_POST['lat'];
  }

  if (isset($_POST['lon'])) {

    $lon = $_POST['lon'];
  }







  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);


    echo " $image";
    // image file directory
    $target = "images/".basename($image);
    
    $sql = "INSERT INTO addp (name,addr,area,tags,de,img, image_text,loctype,thingstodo,accom,Best_Season,lat,lon) VALUES ('$name','$addr','$area','$tags','$de','$image', '$image_text', '$loctype', '$thingstodo', '$accom','$bs','$lat','$lon')";
    // execute query
    

   
  }
  if(!mysqli_query($db,$sql))
  {
    echo 'NOT INSERTED';
  }
  else
  {
    echo 'done';
  }
   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo"Image uploaded successfully";
    }else{
        echo"Failed to upload image";
    }
  
  mysqli_close($db);
  
?>