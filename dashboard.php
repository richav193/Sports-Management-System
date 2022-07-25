<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<style>
  body{
    margin: 0px;
    border: 0px;
  }
  .header
  {
    width: 100%;
    height: 140px;
    background-color: black;
    color: white;
  }
#admin
{
  height: 100px;
  width:25%;
  /* background-color: white; */
  /* border-radius: 37px; */
}
.main-content
{
  display: flex;
}
.sidebar
{
  flex: 1;
  height: 630px;
  background-color: #2c3e50;
}
tr:hover{
  background-color: #BDB76B;
}
.content
{
  flex: 3;
  height: 630px;
  background-color: #ddd011;
  font-size: 20px;
  font-weight: bold;
}
ul li{
  padding: 20px;
  border-bottom: 2px solid grey;
  list-style-type: none;
  color: yellow;
}
ul li:hover
{
  background-color: red;
  color: white;
}
</style>
<body>
  <div class="header">
    <center><img src="admin.webp" alt="admin" id="admin"></center>
    <br>Welcome Admin!
  </div>
  <div class="main-content">
    <div class="sidebar">
        <ul>
          <a href="addevent.php"><li>Add Event</li></a>
          <a href="remove.php"><li>Remove Event</li></a>
          <a href="details.php"><li>Registration detail</li></a>
          <a href="changeloc.php"><li>Change Venue</li></a>
          <a href="logout.php"><li>Logout</li></a>

    </div>
    <div class="content">
    <h3>Hello Admin</h3>
    <table border="10" >
      <thead>
        <th>Event id</th>
        <th>Event</th>
        <th>Event Name</th>
        <th>Entry fees</th>
        <th>Venue</th>
        <th>Date</th>
        <!-- <th>More on event</th>
        <th>Rules and Regulation</th> -->
      </thead>
<!-- <?php
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

               echo "</td><td>".$row['id']."</td><td>".$row['Etitle']."</td><td>".$row['Ename']."</td><td>".$row['fees']."</td><td>".$row['location']."</td><td>".$row['day']."</td></tr>";
             }
              echo "</table>";
           }
           else {
             echo "No results";
           }
$con->close()
?> -->
    </div>
  </div>
</body>
</html>
