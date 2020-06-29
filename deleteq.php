<?php session_start(); ?>
<?php
if(empty($_SESSION['logv']) || $_SESSION['logv'] == ''){
    header("Location: loginadmint.html");
    die();
}

?>
<?php
	$id=$_GET['id'];
	$con = mysqli_connect('localhost', 'root') ;
	mysqli_select_db($con,'testdb');
	
	mysqli_query($con,"delete from `question` where id='$id'");
	header('location:addq.php');
?>

