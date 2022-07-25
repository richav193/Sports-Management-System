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
    top: 22%;
    transform: translateX(2%);
    margin: 10px auto;
    padding: 10px 20px;
    background: rgba(0,0,0,.3);
    border-radius: 8px;
    position: relative;
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
  height: 730px;
  background-color: #2c3e50;
}
.content
{
  flex: 3;
  height: 730px;
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
          <a href="remove.php"><li>Remove Event</li></a>
          <a href="details.php"><li>Registration detail</li></a>
          <a href="changeloc.php"><li>Change Venue</li></a>
          <a href="logout.php"><li>Logout</li></a>

    </div>
    <div class="content">
    <h3>Hello Admin:Update venue for Event</h3>
    <div class="form"><center>
      <form action="" method="post">
        <label>Updated Venue:</label>
        <input type="text" name="uloc" placeholder="New Event Loaction" required><br>
        <label>Event id:</label>
        <input type="number" name="id" placeholder="Event ID" min="0" required><br>
        <br><br><br>
      <input type="submit" name="submit" value="add event">
    </center></form>
    </div>


  <!-- <?php
       include "connection.php";
       if($con->connect_error)
       {
         die('Connection failed'.$con->connect_error);
       }else{
         if(isset($_POST['submit'])){
        $uloc=$_POST['uloc'];
        $id=$_POST['id'];

        $add="UPDATE 'events' SET 'location'='$uloc' WHERE 'id'='$id'";

          if($con->query($add))
          {
            echo "Event location updated Successfully";
          }
          else {
            echo "Error while updating events".mysqli_error($con);
          }
        }
}
$con->close();
 ?> -->

</div>
</div>
</body>
</html>
