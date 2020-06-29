
<?php
  
  $ques='';
  $opt1='';
  $opt2='';
  $opt3='';
  $con=mysqli_connect('localhost','root','');
  if(!$con)
  {
    echo 'not connected';
  }
  if(!mysqli_select_db($con,'testdb'))
  {
    echo 'Database Not Selected';
  }
  echo 'databse connected';
   if (isset($_POST['ques'])) {

    $ques = $_POST['ques'];
  }
   if (isset($_POST['opt1'])) {
    $opt1 = $_POST['opt1'];
  }
  if (isset($_POST['opt2'])) {
    $opt2 = $_POST['opt2'];
  }
  if (isset($_POST['opt3'])) {
    $opt3 = $_POST['opt3'];
  }

   
  
  $sql = "INSERT INTO question (ques,opt1,opt2,opt3) VALUES ('$ques','$opt1','$opt2','$opt3')";
  if(!mysqli_query($con,$sql))
  {
    echo 'NOT INSERTED';
  }
  else
  {
    echo 'done';
  }
  header("refresh:2; url=addq.php");
  
  
  
  ?>
