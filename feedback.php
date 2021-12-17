<?php
$email=$_post['email'];
$comment=$_commnt['comment'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'MMF_db');  // mmf is the data base name
$q="INSERT INTO feedback('email','comment')
          value('$email','$comment')";
    $status=mysqli_query($con,$q);
    $mysqli_close($con);
 ?>
