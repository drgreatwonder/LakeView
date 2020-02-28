<?php
   include('dbconnection1.php');
   session_start();

   //this worked.
   $myusername = $_SESSION['signed_in'];
   
   $query = "SELECT * FROM users where username = '$myusername' ";
   //or
   // $sql = mysqli_query($conn, "SELECT * FROM users where username = '$myusername' ");

   $sql = mysqli_query($conn,  $query);
   $row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);
   
   $firstname = $row['firstname'];
   $lastname = $row['lastname'];
   $username = $row['username'];
   $dob = $row['dob'];
   $email = $row['email'];
   $phonenumber =  $row['phonenumber'];
   //  $password = $row['password'];
   //  $gender = $row['gender'];
   $aboutme = $row['aboutme'];
   $picture = "<img src='asset/".$row['profilepix']." alt='image'image'>";
   $address = $row['address'];

   
   // if(!isset($_SESSION['signed_in'])){
   //    header("location:index.php");
   // }




   //let's try this
// $user_check=$_SESSION['signed_in'];
// $ses_sql=mysqli_query($conn,"select username from users where username='$user_check'");
// $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// $loggedin_session=$row['username'];
// $loggedin_id=$row['user_id'];
// if(!isset($loggedin_session) || $loggedin_session==NULL) {
//  echo "Go back";
//  header("Location: index.php");
// }
   ?>
