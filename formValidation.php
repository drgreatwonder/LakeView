<?php
include "dbconnection.php";

//set the variables to empty
$firstnameError = " ";
$lastnameError = " ";
$username = "";
$dob = "";
$emailError = "";
$phonenumberError = "";
$password1 = "";
$password = "";
$genderError = "";
$profilepix = "";
$aboutme = "";

    session_start();

if (isset($_POST["submittenantreg"]))
{
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $gender = $_POST['gender'];
    // $profilepix = $_POST['profilepix'];
    $address = $_POST['address'];
    $aboutme = $_POST['aboutme'];

    $duplicate = mysqli_query($conn, "SELECT * from users where email = '$email'");

    if (mysqli_num_rows($duplicate)>0) {
        echo json_encode(array("statusCode"=>201));
    } else {
      
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `dob`, `email`, `phonenumber`, `password`, `gender`, `aboutme`, `profilepix`, `address`) VALUES ('$firstname', '$lastname', '$username', '$dob', '$email', '$phonenumber', '$password', '$gender', '$aboutme', 'NULLVAL', '$address')";

        if (mysqli_query($conn, $sql))
        {
            echo json_encode(array("statusCode"=>200));
        } else
        {

            echo json_encode(array("statusCode"=>201));
        }
    }
    


    // if(isset($_POST['loginbtn'])) {

    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $check = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
    //     var_dump($check);
    //     if (mysqli_num_rows($check)>0) {

    //         $_SESSION['username'] = $username;
    //         echo json_encode(array("statusCode"=>200));

    //     } else {

    //         echo json_encode(array("statusCode"=>201));
    //     }

        mysqli_close($conn);
}





  //path were our avatar image will be stored
//   $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
        
  //make sure the file type is image
//   if (preg_match("!image!",$_FILES['avatar']['type'])) 
//   {         
      //copy image to images/ folder 
//       if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) 
//       {

//       }
//   }




