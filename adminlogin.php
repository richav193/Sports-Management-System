<?php

include "connection.php";
if($con->connect_error)
{
  die('Connection failed'.$con->connect_error);
}
$email=$_POST['email'];
$pass=$_POST['password'];
$que="select * from admin where email='$email' and password='$password'";
$result=$con->query($que);
$num=mysqli_num_rows($result);
if($num>0)
{
  echo "<script>";
  echo "(window.location.assign('dashboard.php')) </script>";
}
else {

  echo "<script type=text/javascript>";
  echo "alert('Provide proper credential')";
  echo "</script>";
  echo "<script>";
  echo "(window.location.assign('admin.html')) </script>";
}
$con->close();
?>
