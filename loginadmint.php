<?php
session_start();
$a='123';
$username='';
$password='';

// Grab User submitted information
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

  if (isset($_POST['password'])) {

    $password = $_POST['password'];
  }
$q = "SELECT * FROM login WHERE username='" .$username."' AND password ='" .$password."'limit 1";

$result=mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
echo $row["username"];
echo $row['password'];

if($row["username"]==$username && $row["password"]==$password){
	$_SESSION['user_name']=$username;
	$_SESSION['loggedIn'] = true;
	$_SESSION['logv']='user';
	
	

    echo"You are a validated user.";
    
	header('Location: Adminfront.php');

} else {
    echo"Sorry, your credentials are not valid,go back and please try again.";
	?>
	<a href="loginadmint.html">Click here to go back</a>
	<?php
	echo "<script type='text/javascript'>alert('Wrong Credentials!')</script>";	

 }
?>