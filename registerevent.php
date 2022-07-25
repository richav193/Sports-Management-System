<?php

  include "connection.php";
  if($con->connect_error)
  {
    die('Connection failed'.$con->connect_error);
  }
  if(isset($_POST['submit']))
  {
    $evnentname=$_POST['Ename'];
    $no=$_POST['no'];
    $title=$_POST['Etitle'];
    $team=$_POST['team'];
    $agree=$_POST['agree'];
    if($agree=='agreed')
    {
      $sql="insert into eventreg(ename,tel,team,forsports) values('$evnentname','$no','$team','$title')";
      if(mysqli_query($con,$sql))
      {
        echo "<script type=text/javascript>";
        echo "alert('Registered succesfully')";
        echo "</script>";
        echo "<script>";
        echo "(window.location.assign('event.php')) </script>";


      }
      else{
        echo "<script type=text/javascript>";
        echo "alert('Already Registered ')";
        echo "</script>";
        echo "<script>";
        echo "(window.location.assign('event.php')) </script>";
      }

    }
  else {
    echo "<script type=text/javascript>";
    echo "alert('Agree to r&r')";
    echo "</script>";
    echo "<script>";
    echo "(window.location.assign('event.php')) </script>";
  }
}
$con->close();
 ?>
