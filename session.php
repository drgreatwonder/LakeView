<?php
   include('dbconnection.php');
   session_start();

   $myusername = $_SESSION['signed_in'];

   $query = "SELECT * FROM users where username = '$myusername' ";

   $sql = mysqli_query($conn, $query);

   $row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);

    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $dob = $row['dob'];
    $email = $row['email'];
    $phonenumber =  $row['phonenumber'];
    $password = $row['password'];
    $gender = $row['gender'];
    $aboutme = $row['aboutme'];
    $picture = "<img src='asset/images/".$row['profilepix']." alt='image'image'>";
    $address = $row['address'];

   if(!isset($_SESSION['signed_in'])){
      header("location:index.php");
   }
   ?>
