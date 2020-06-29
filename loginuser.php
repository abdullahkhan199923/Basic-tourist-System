


<?php
session_start();
$a='123';
$username='';
$password='';
echo"you are here";
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
$q = "SELECT * FROM regt WHERE username='" .$username."' AND password ='" .$password."'limit 1";

$result=mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
echo $row["username"];


if($row["username"]==$username && $row["password"]==$password){
    echo"You are a validated user.";
	$_SESSION['user_name']=$username;
	$_SESSION['loggedIn'] = true;
	$_SESSION['count'] = 1;
	$_SESSION['logv']='user';
	$_SESSION['f']=false;
	header('Location: userfront.php');

} else {
     echo"Sorry, your credentials are not valid,go back and please try again.";
	?>
	<a href="loginuser.html">Click here to go back</a>
	<?php
echo "<script type='text/javascript'>alert('Wrong Credentials!')</script>";

 }
 
?>