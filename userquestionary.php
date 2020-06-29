<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginuser.html");
    die();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question Form</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- main css -->
  

     <!-- script for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <!-- cdn link for run test -->
    <script src="https://gitcdn.link/repo/freeCodeCamp/testable-projects-fcc/master/build/bundle.js"></script>

                   


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
        <li class="nav-item ">
          <a class="nav-link" href="userfront.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="Allplaces.php">AllPlaces</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="userquestionary.php">Suitable Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link confirm" href="logoutuser.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- container -->
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <!-- title -->
                <h1 id="title">Answer this questions</h1>
                <!-- description -->
                
                <!-- form -->
                <!-- 
                            <div class="form-group col-md-4"
                            >
                                <label for="name" id="name-label" class="user-name">Name</label>
                                <input type="text" id="name" class="form-control form-control-sm" name="name" placeholder="Enter your name." >
                            </div>
                     
                            <div class="form-group col-md-4">
                                <label for="email" id="email-label">Email</label>
                                <input type="email" id="email" class="form-control form-control-sm" name="email" placeholder="Enter your email." >
                            </div>
                                                 <div class="form-group col-md-4">
                                <label for="age" id="number-label">Age</label>
                                <input type="number" id="number" class="form-control form-control-sm" name="age" min="8" max="120" placeholder="Enter your age."
                                    >
                            </div>
                        </div>
                    </div>
                    <div class="mid-part">
                    -->	     
                    



 <form class="form-signin" action="eval.php" method="POST">
     
<?php

$num='';
$con = mysqli_connect('localhost', 'root') ;
mysqli_select_db($con,'testdb');
$q="select * from question";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<label>" . $row['ques'] . "</label>";
	echo "<br>";
	
	echo '<input type="radio" name="'.$i.'" value="'.$row['opt1'].'"/>' .$row['opt1'];
	
	echo "<br>";
	echo '<input type="radio" name="'.$i.'" value="'.$row['opt2'].'"/>' .$row['opt2'] ;
	echo "<br>";
	echo '<input type="radio"  name="'.$i.'" value="'.$row['opt3'].'"/>' .$row['opt3'] ;
	echo "<br>";
	echo "<br>";
}
mysqli_close($con);
echo "$num";
echo '<input type="hidden" name="num" value="'.$num.'"/>';




?>

          <!-- submit button -->
                    <div class="btn-box">
                        <button type="submit" id="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>
</form>    

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