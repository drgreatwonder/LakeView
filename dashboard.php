<?php 
require "dbconnection1.php";
$username = $_GET['username'];

$query = "SELECT * FROM users WHERE username = '$username'";

$sql = mysqli_query($conn,$query);

if($sql){
  $data = mysqli_fetch_array($sql);

}


require "dbconnection1.php";
require "tenantregconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/dashboards.css">
</head>
<body>
    <!-- Side navigation -->
<div class="sidenav">
  
    <a href="index.php">Home</a>
    <a href="securitydues.php">Payments</a>
    <a href="#">Property Registration</a>
    <a href="visitorsreg.php">Visitors Registration</a>
    <a href="#">Events</a>
    <a href="logout.php">Logout</a>
  </div>
  
  <!-- Page content -->
  <div class="main">
    <img src=" <?php echo $profilepix ?>" alt="Avatar" class="profilepix">

  <div class="card">
  <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
  <div class="container personalinfo">
    <h4>Personal Info</h4>
   
    <p><b>Username: </b> <?php echo $username ?></p>
    <!-- <p><b>Username: </b> John Doe</p> -->
    <p><b>Email: </b> <?php echo $email ?></p>
    <!-- <p><b>Email: </b> John Doe</p> -->
    <p><b>DOB: </b> <?php echo $dob ?></p>
    <!-- <p><b>DOB: </b> John Doe</p> -->
    <p><b>Phone Number: </b> <?php echo $phonenumber ?></p>
    <!-- <p><b>Phone Number: </b> John Doe</p> -->
    <p><b>About Me: </b> <?php echo $aboutme ?></p>
    <!-- <p><b>About Me: </b> John Doe</p> -->
  </div>

  <!-- <div class="container propertyinfo">
    <h4>Property Info</h4>
    <img src="asset/images/in.jpg" alt="Avatar" id="housepix">
  <p><b>Property Name: </b> John Doe</p>
    <p><b>Address: </b> John Doe</p>
    <p><b>Year Built: </b> John Doe</p>
    <p><b>Property Type: </b> John Doe</p>
  </div> -->
  </div>
</div>
</body>
</html>