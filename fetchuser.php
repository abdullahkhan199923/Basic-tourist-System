<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "testdb");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM regt 
  WHERE username LIKE '%".$search."%'
  OR password LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
  OR fname LIKE '%".$search."%' 
  OR lname LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM regt ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>username</th>
     <th>password</th>
     <th>email</th>
     <th>fname</th>
     <th>lname</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["username"].'</td>
    <td>'.$row["password"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["fname"].'</td>
    <td>'.$row["lname"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>