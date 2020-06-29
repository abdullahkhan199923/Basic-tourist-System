

<?php
	$username='';
	$password='';
	$email='';
	$fname='';
	$lname='';

	
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
 if (isset($_POST['email'])) {

    $email = $_POST['email'];
  }

  if (isset($_POST['fname'])) {

    $fname = $_POST['fname'];
  }
  if (isset($_POST['lname'])) {

    $lname = $_POST['lname'];
  }

/*	$username = $_POST['username'];
	$password = $_POST['password'];
	$email=$_POST['email'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];*/
	$sql = "INSERT INTO regt (username,password,email,fname,lname) VALUES ('$username','$password','$email','$fname','$lname')";

	if(!mysqli_query($con,$sql))
	{
		echo 'NOT INSERTED';
	}
	else
	{
		echo 'done';
	}
	
	
	header("refresh:2; url=regt.html");
	?>



