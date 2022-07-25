<!DOCTYPE html>
<html>
  <head>
    <title>Events</title>
  </head>
  <body>
    <style>
    body{
      background: url("star.jpg") no-repeat;

      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }
    ul {
      float: right;
      list-style-type: none;
      margin-top: 25px;
    }
    ul li{
      display: inline-block;
    }
      .topnav{
        overflow: hidden;
        background-color: #000080;
      }
      .topnav a
      {
        float: right;
        text-align: center;
        padding: 0px 10px;
        text-decoration: none;
        font-size: 25px;
        font-family: serif;
        border: 1.4px solid #008000;
      }
      .topnav a:hover
      {
        background-color: #556B2F;
        color: black;
      }
      .topnav a.active
      {
        background-color: #4CAF50;
        color: white;
      }
p{
  font-size: 250%;
  color: #800080;
}

      table{
        border-collapse: separate;
        width: 55%;
      }
      th{
        background-color: #4CAF50;
      }
      th,td{
        padding: 8px;
        text-align: left;
        border-bottom: 2px solid #ddd;
      }
      tr:hover{
        background-color: #BDB76B;
      }
      form{
        max-width: 40%;
        margin: 10 px auto;
        padding: 10px 20px;
        background-color: transparent;
        border-radius: 8px;
      }
      input[type=text],[type=tel]
      {
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid red;
        font-size: 16px;
        outline: 0;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgb(0,0,0,0.3) inset;

      }
      input:focus{
        box-shadow: 0 0 5px rgba(91,203,300,1);
        border: 1px solid rgba(81,203,300,1);
      }
      input [type="radio"]
      {
        margin :0 4px 8px 0;
        color:darkorange;
      }
      input[type="submit"]:hover{
        color: #255784;
        background: #2196f3;
        box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,0 0 80px #2196f3
      }
        input[type="submit"]{
          background: #0066A2;
          color: white;
          border-style: outset;
          border-color: #0066A2;
          height: 40px;
          width: 130px;
          font: bold 15px arial, sans-serif;
          text-shadow:none;
        }
    </style>
    <div class="topnav">
    <header>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="contactus.html">Contact us</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
    </header></div>
    <marquee width="100%" direction="right" height="100px"><p>Welcome to events page.<p></marquee>
    <center>
    <table border="10" >
      <thead>
        <th>Event Name</th>
        <th>Event Type</th>
        <th>Entry fees</th>
        <th>Venue</th>
        <th>Date</th>
        <!-- <th>More on event</th>
        <th>Rules and Regulation</th> -->
      </thead>
<?php
     include "connection.php";
     if($con->connect_error)
     {
       die('Connection failed'.$con->connect_error);
     }


       $sql="select * from events";
         $result=$con->query($sql);
         if($result->num_rows >0){
             while($row=$result->fetch_assoc())
             {

               echo "</td><td>".$row['name']."</td><td>".$row['tilte']."</td><td>".$row['fees']."</td><td>".$row['location']."</td><td>".$row['day']."</td></tr>";

             }
              echo "</table>";
           }
           else {
             echo "No results";
           }
$con->close()
?>
<form id="regform" method="post" action="registerevent.php">
  <p style="color:red;">Register for Event</p>
  <input type="text" name="Ename" placeholder="Enter valid event name" required><br>
  <input type="tel" name="no" placeholder="Enter you Contact number" required><br>
  <input type="text" name="Etitle" placeholder="Enter valid sports type" required><br>
  <input type="text" name="team" placeholder="Enter your team name" required><br><br>

  <!-- <input type="radio" name="agree" value="agreed" >Accept R&R<br><br> -->

  <input type="submit" name="submit" value="Register">
</table></center>
</body>
</html>
