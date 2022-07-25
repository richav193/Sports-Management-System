<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<style>
  body{
    margin: 0px;
    border: 0px;
    background-size: auto;
  }
  .header
  {
    width: 100%;
    height: 140px;
    background-color: black;
    color: white;
  }
  form{
    top: 30%;
    left: 20%;
    transform: translateX(40%);
    margin: 10px auto;
    padding: 10px 20px;
    background: rgba(0,0,0,.3);
    border-radius: 8px;
    position: fixed;
  }
  form label{
    display: inline-block;

    color: #fff;
    font-size: 20px;
    margin-bottom: 8px;
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
.content
{
  flex: 3;
  height: 630px;
  background-color: #34495e;
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
input[type=text],[type=tel],[type=date],[type=number]
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
<body>
  <div class="header">
    <center><img src="admin.webp" alt="admin" id="admin"></center>
    <br>Welcome Admin!
  </div>
  <div class="main-content">
    <div class="sidebar">
        <ul>
          <a href="dashboard.php"><li>Events</li></a>
          <a href="addevent.php"><li>Add Event</li></a>
          <a href="details.php"><li>Registration detail</li></a>
          <a href="changeloc.php"><li>Change Venue</li>
          <a href="logout.php"><li>Logout</li></a>

    </div>
    <div class="content">
    <h3>Hello Admin:Delete Event</h3>
    <div class="form"><center>
      <form action="" method="post">

        <label>Event Name:</label>
        <input type="text" name="Ename" placeholder="Event Name" required><br>
        <label>Event for:</label>
        <input type="text" name="Etitle" placeholder="Event For(eg.Cricket,football etc)" required><br>
        <input type="submit" name="submit" value="Delete event">
      </center></form>
      </div>
      <!-- <?php
           include "connection.php";
           if($con->connect_error)
           {
             die('Connection failed'.$con->connect_error);
           }else{
             if(isset($_POST['submit'])){
               $title=$_POST['Etitle'];
               $name=$_POST['Ename'];
                $del="delete from events where title='$title' and name='$name'";
                if($con->query($del)===TRUE)
                {
                  echo "Event deleted Successfully";
                }
                else {
                  echo "error";
                }

             }

}
$con->close();
?> -->
    </div>
  </div>
  </body>
  </html>
