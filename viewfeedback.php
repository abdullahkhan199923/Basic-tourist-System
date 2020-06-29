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
         <li class="nav-item active">
          <a class="nav-link" href="viewfeedback">View Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link confirm" href="logoutadmin.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php

$num='';
$con = mysqli_connect('localhost', 'root') ;
mysqli_select_db($con,'testdb');
$q="select * from feedback";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#ffffff\"><tr>  
<th bgcolor=\"#ffffff\" width=100>username</th> 
<th bgcolor=\"#ffffff\" width=100>place</th> 
<th bgcolor=\"#ffffff\" width=100>feedback</th> 
 
</tr>"; 

for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
print "<tr>"; 
print "<td>" . $row['username'] . "</td>"; 
print "<td>" . $row['place'] . "</td>";
print "<td>" . $row['feedback'] . "</td>";
print "</tr>";
}
print "</table>";

mysqli_close($con);



?>

    
</body>

</html>
<script type="text/javascript">
    $('.confirm').on('click', function () {
        return confirm('Are you sure want to logout?');
    });
</script>