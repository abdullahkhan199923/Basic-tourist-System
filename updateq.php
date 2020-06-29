<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginadmint.html");
    die();
}

?>
<?php
	$con = mysqli_connect('localhost', 'root') ;
	mysqli_select_db($con,'testdb');
	
	$id=$_GET['id'];
	echo"$id"; 
	$ques=$_POST['ques'];
	$opt1=$_POST['opt1'];
	$opt2=$_POST['opt2'];
	$opt3=$_POST['opt3'];
	echo"$ques";
	echo"$opt1";
	echo"$opt2";
	echo"$opt3";
	$sql="UPDATE question SET ques='$ques',opt1='$opt1',opt2='$opt2',opt3='$opt3' WHERE id=$id";

	


	if(!mysqli_query($con,$sql))
	{
		echo 'NOT updated';
	}
	else
	{
		echo 'updated';
	}
	header('location:addq.php');
?>