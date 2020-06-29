<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginuser.html");
    die();
}

?>


<?php
  $username='';
  $place='';
  $feedback='';
  
  
  $con=mysqli_connect('localhost','root','');
  if(!$con)
  {
    echo 'not connected';
  }
  if(!mysqli_select_db($con,'testdb'))
  {
    echo 'Database Not Selected';
  }

  if (isset($_POST['username'])) {

    $username = $_POST['username'];
  }

  if (isset($_POST['place'])) {

    $place = $_POST['place'];
  }
 if (isset($_POST['feedback'])) {

    $feedback = $_POST['feedback'];
  }

/*  $username = $_POST['username'];
  $password = $_POST['password'];
  $email=$_POST['email'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];*/
  $sql = "INSERT INTO feedback (username,place,feedback) VALUES ('$username','$place','$feedback')";

  if(!mysqli_query($con,$sql))
  {
    echo 'NOT INSERTED';
    echo "<script type='text/javascript'>alert('Wrong feedback!')</script>";
  }
  else
  {
    
    echo "<script type='text/javascript'>alert('feedback inserted')</script>";
    header("refresh:2; url=feedback.php");
  }
  
  
  header("refresh:2; url=feedback.php");
  ?>

