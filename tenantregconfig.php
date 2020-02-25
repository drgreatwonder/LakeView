<?php

require "dbconnection1.php";

//receive the values from the form
if (isset($_POST['submittenantreg'])){
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $username = $_POST['username'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];
   $password = $_POST['password'];
   $gender = $_POST['gender'];
   $aboutme = $_POST['aboutme'];
   $uploadfile = $_FILES["profilepix"]["tmp_name"];
   $target = "asset/images".basename ($_FILES ['profilepix']['name']);
   $profilepix = $_FILES['profilepix']['name'];
   move_uploaded_file( $uploadfile , $target );
  //  $address = $_POST['address'];
   $address = 54657;
   $userstatus = $_POST['userstatus'];
  //  $role = $_POST['role'];
   $role = 3;
 
   //insert the values into the database
 $query = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `dob`, `email`, `phonenumber`, `password`, `gender`, `aboutme`, `profilepix`, `role`, `userstatus`) VALUES ('$firstname', '$lastname', '$username', '$dob', '$email', '$phonenumber', '$password', '$gender', '$aboutme', '$profilepix', '$role', '$userstatus')";


 //performs query against the database
 if (mysqli_query($conn, $query)){
   echo "<font color=#fff'>You Have successfully Signed Up Kindly <a href='dashboard.php'>Sign In</a> To Continue</font>";

 }
 else{
   echo "<font color='#660000'>Error!!! NOT REGISTERED</font> " . mysqli_error($conn);
 }
}
mysqli_close($conn);


//REGISTER USER
// if (isset($_POST['submittenantreg'])) {
 
  // receive all input values from the form
  // $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  // $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  // $username = mysqli_real_escape_string($conn, $_POST['username']);
  // $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  // $email = mysqli_real_escape_string($conn, $_POST['email']);
  // $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
  // $password = mysqli_real_escape_string($conn, $_POST['password']);
  // $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  // $aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);
  // $profilepix = mysqli_real_escape_string($conn, $_POST['profilepix']);
  // $address = mysqli_real_escape_string($conn, $_POST['address']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  // if (empty($firstname)) { 
  //   array_push($errors, "First name is required");
   
    //   if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
    //   $error = true;
    //   $firstnameerror = "Name must contain only alphabets and space";

    // }
  // }

  
  // if (empty($lastname)) { 
  //   array_push($errors, "Last name is required");
   
    //   if (!preg_match("/^[a-zA-Z ]+$/",$lastname)) {
    //   $error = true;
    //   $lastnameerror = "Name must contain only alphabets and space";

    // }
  // }


  // if (empty($username)) { 
  //   array_push($errors, "Username is required");
   
    //   if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
    //   $error = true;
    //   $usernameerror = "Name must contain only alphabets and space";

    // }
  // }

  
  // if (empty($dob)) { 
  //   array_push($errors, "Date of birth is required");
   
  // }

  
  // if (empty($email)) { 
  //   array_push($errors, "email is required");
  
      // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      //     $emailerror = "Invalid email format";
      //   }

    // }

    // if (empty($phonenumber)) { 
    //   array_push($errors, "Phone number is required");
  
    //   }
  

  // if (empty($password)) { array_push($errors, "Password is required"); }
  // if ($initialpassword != $password) {
	// array_push($errors, "The two passwords do not match");
  // }


  
  // if (empty($gender)) { 
  //   array_push($errors, "Gender is required");

  //   }

  //   if (empty($address)) { 
  //     array_push($errors, "First name is required");
  //   }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  // $result = mysqli_query($conn, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Username already exists");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "email already exists");
  //   }
  // }

  // Finally, register user if there are no errors in the form
  // if (count($errors) == 0) {
  // 	$password = md5($password);//encrypt the password before saving in the database

  	// $query = "INSERT INTO users (firstname, lastname, username, dob, email, phonenumber, password, gender, aboutme, profilepix, NULLVAL, address, NULLVAL) 
    //       VALUES('$firstname', '$lastname', '$username', '$dob', '$email', '$phonenumber', '$password',  '$gender', '$aboutme', '$profilepix', '$address' )";
          // var_dump($query);
          // die();
//   	mysqli_query($conn, $query);
//   	$_SESSION['username'] = $username;
//   	$_SESSION['success'] = "You have successfully registered";
//   	header('location: dashboard.php');
//   }
// }

//  if (count($errors) > 0) : ?>
  <!-- <div class="error"> -->
    <?php 
    // foreach ($errors as $error) :
     ?>
      <p><?php
      //  echo $error
        ?></p>
    <?php 
    // endforeach 
    ?>
  </div>
<?php  
// endif 
?>

<?php
// if (isset($_POST['loginbtn'])) {
//   $username = mysqli_real_escape_string($conn, $_POST['username']);
//   $password = mysqli_real_escape_string($conn, $_POST['password']);

//   if (empty($username)) {
//   	array_push($errors, "Username is required");
//   }
//   if (empty($password)) {
//   	array_push($errors, "Password is required");
//   }

//   if (count($errors) == 0) {
//   	$password = md5($password);
//   	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//   	$results = mysqli_query($conn, $query);
//   	if (mysqli_num_rows($results) == 1) {
//   	  $_SESSION['username'] = $username;
//   	  $_SESSION['success'] = "You are now logged in";
//   	  header('location: dashboard.php');
//   	}else {
//   		array_push($errors, "Wrong username/password combination");
//   	}
//   }
// }
?>