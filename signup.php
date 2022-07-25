<?php
error_reporting(E_ALL);
 ini_set('display_errors', 1);

$msg='';

include "connection.php";
if($con->connect_error)
{
  die('Connection failed'.$con->connect_error);
}
if(isset($_POST['submit'])){
  if($_POST['password']==$_POST['password-re']){
$name=$_POST['name'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$email=$_POST['email'];
$pass=$_POST['password'];
$repass=$_POST['password-re'];
$no=$_POST['no'];

  $quer="insert into registration(name,gender,country,password,email,no) values ('$name','$gender','$country','$pass','$email','$no')";

  if(mysqli_query($con,$quer))
  {
    echo "<script type=text/javascript>";
    echo "(window.location.assign('login.html'))";
    echo "</script>";
    echo "Succesfully Registered";
  }
  else{
    echo "<script type=text/javascript>";
    echo "alert('NO proper value given')";
    echo "</script>";
    echo "<script>";
    echo "(window.location.assign('registration.html')) </script>";
  }
}
else{
  echo "password wont match";
}}

else {
  echo "Error0".mysqli_error($con);
}
$con->close();
?>
