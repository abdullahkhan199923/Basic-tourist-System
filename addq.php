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

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
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
        <li class="nav-item active">
          <a class="nav-link" href="addq.php">Add Question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addpfinal.php">Add Places</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewuser.php">View User</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="viewfeedback.php">View Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link confirm" href="logoutadmin.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 
<div class="container">
        <div class="row">
            <div class="col-md-12">
             <form action="AddQuest.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>ADD QUESTIONS</h1>
    <p>Please fill in this form to add Question.</p>
    <hr>


    <label for="ques"><b>Question</b></label>
    <input type="text" class="form-control" placeholder="Enter Question" name="ques" required>

    
    <label for="opt1"><b>opt1</b></label>
    <input type="text"  class="form-control" name="opt1" >

    <label for="opt2"><b>opt2</b></label>
    <input type="text" class="form-control" name="opt2" >

     <label for="opt3"><b>opt3</b></label>
    <input type="text" class="form-control" name="opt3" >


    <div class="btn-box">
                        <button type="submit" id="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>

</div>
</form>


<?php

$num='';
$con = mysqli_connect('localhost', 'root') ;
mysqli_select_db($con,'testdb');
$q="select * from question";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#ffffff\"><tr> 
<td width=100>Question</td> 
<td width=100>opt1</td> 
<td width=100>opt2</td> 
<td width=100>opt3</td> 
</tr>"; 
while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
              <td><?php echo $row['ques']; ?></td>
              <td><?php echo $row['opt1']; ?></td>
              <td><?php echo $row['opt2']; ?></td>
              <td><?php echo $row['opt3']; ?></td>
              <td>
                <a href="editq.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deleteq.php?id=<?php echo $row['id']; ?>">Delete</a>
              </td>
            </tr>
            <?php
          }
        ?>

</div>
</div>
</div>




</body>
</html>
<script type="text/javascript">
    $('.confirm').on('click', function () {
        return confirm('Are you sure want to logout?');
    });
</script>