<?php

  error_reporting(E_ALL);
   ini_set('display_errors', 1);



  include "connection.php";
  if($con->connect_error)
  {
    die('Connection failed'.$con->connect_error);
  }
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $country=$_POST['country'];
  $message=$_POST['msg'];
  $quer="insert into contact(fname,lname,country,message) values('$fname','$lname','$country','$message')";
  if(mysqli_query($con,$quer))
  {
    echo "<script type=text/javascript>";
    echo "alert('Message sent succesfully')";
    echo "</script>";
    echo "<script>";
    echo "(window.location.assign('contactus.html')) </script>";
  }
  else{
    echo "error";
  }
  $con->close();

?>
