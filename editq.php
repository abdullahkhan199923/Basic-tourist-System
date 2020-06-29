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
	$query=mysqli_query($con,"select * from `question` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updateq.php?id=<?php echo $id; ?>">
		<label>question:</label><input type="text" value="<?php echo $row['ques']; ?>" name="ques">
		<label>opt1:</label><input type="text" value="<?php echo $row['opt1']; ?>" name="opt1">
		<label>opt2:</label><input type="text" value="<?php echo $row['opt2']; ?>" name="opt2">
		<label>opt3:</label><input type="text" value="<?php echo $row['opt3']; ?>" name="opt3">
		<input type="submit" name="submit">
		<a href="addq.php">Back</a>
	</form>
</body>
</html>