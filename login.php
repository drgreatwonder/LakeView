  
<?php
require "dbconnection1.php";
// session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form

   $myusername = mysqli_real_escape_string($conn,$_POST['username']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

  $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";

  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $myusername = $row['username'];

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
     $_SESSION['signed_in'] = $myusername;
     header("location: dashboard.php?username=$myusername");
  } else {
     echo "<font color='#600000'>Your Username or Password is invalid</font>";
  }
}

  ?>