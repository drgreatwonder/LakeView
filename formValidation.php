<?php
include "dbconnection.php";
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location: dashboard.php");
}
$error = false;

$firstnameerror ="";
$lastnameerror = "";
$usernameerror = "";
$doberror = "";
$emailerror = "";
$phonenumbererror = "";
$passworderror = "";
$firstname = $_POST['firstname'];
$addresserror = $_POST['address'];
//     // $profilepix = $_POST['profilepix'];
//     $address = $_POST['address'];
//     $aboutme = $_POST['aboutme'];

if (isset($_POST['signup'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $profilepix = mysqli_real_escape_string($conn, $_POST['profilepix']);
    $aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);	
    
    
	if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
		$error = true;
		$firstnameerror = "Name must contain only alphabets and space";
    }
    
    if (!preg_match("/^[a-zA-Z ]+$/",$lastname)) {
		$error = true;
		$lastnameerror = "Name must contain only alphabets and space";
    }

    if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
		$error = true;
		$usernameerror = "Name must contain only alphabets and space";
    }


	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$emailerror = "Please Enter Valid Email ID";
    }

    
    if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/",$phonenumber)) {
		$error = true;
		$phonenumbererror = "Name must contain only alphabets and space";
    }
    
	if(strlen($initialpassword) < 6) {
		$error = true;
		$passworderror = "Password must be minimum of 6 characters";
	}
	if($initialpassword != $password) {
		$error = true;
		$passworderror = "Password and Confirm Password doesn't match";
    }

    if (!preg_match("/^\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\./",$address)) {
		$error = true;
		$addresserror = "Name must contain only alphabets and space";
    }
    

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profilepix"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profilepix"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["profilepix"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profilepix"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["profilepix"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO users(user, email, pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$success_message = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$error_message = "Error in registering...Please try again later!";
		}
	}
}



// if (isset($_POST['username']) && isset($_POST['password'])){
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $username = $_POST['username'];
//     $dob = $_POST['dob'];
//     $email = $_POST['email'];
//     $phonenumber = $_POST['phonenumber'];
//     $initialpassword = $_POST['initialpassword'];
//     $password = md5($_POST['password']);
//     $gender = $_POST['gender'];
//     $address = $_POST['address'];
//     $profilepix = $_POST['profilepix'];
//     $aboutme = $_POST['aboutme'];

    // $slquery = "SELECT 1 FROM user WHERE email = '$email'";
    // $selectresult = mysql_query($slquery);
    // $duplicate = mysqli_query($conn, "SELECT * from users where email = '$email'");

    // if (mysqli_num_rows($duplicate)>0)
    // {
    //      $msg = 'email already exists';
    // }
    // elseif($inintialpassword != $password){
    //      $msg = "passwords doesn't match";
    // }
    // else{
        //   $query = "INSERT INTO `register` (username, password,confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";

//           $result = mysqli_query($conn, "INSERT INTO `users` (firstname, lastname, username, dob, email, phonenumber, password, aboutme, profilepix, role, address, userstatus) VALUES ('$firstname', '$lastname', '$username', '$dob', '$email', '$phonenumber', '$password', '$aboutme', '$profilepix', 'NULLVAL', '$address', 'NULLVAL)");

//           if($result){
//              $msg = "User Created Successfully.";
//           }
//     }
// }



//     session_start();

// if (isset($_POST["submittenantreg"]))
// {
    
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $username = $_POST['username'];
//     $dob = $_POST['dob'];
//     $email = $_POST['email'];
//     $phonenumber = $_POST['phonenumber'];
//     $password = $_POST['password'];
//     // $firstname = $_POST['firstname'];
//     $gender = $_POST['gender'];
//     // $profilepix = $_POST['profilepix'];
//     $address = $_POST['address'];
//     $aboutme = $_POST['aboutme'];

    // $duplicate = mysqli_query($conn, "SELECT * from users where email = '$email'");

    // if (mysqli_num_rows($duplicate)>0) {
        // echo json_encode(array("statusCode"=>201, "User Already Exist"));
    //     echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	// exit;
    // } else {
      
    //     $sql = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `dob`, `email`, `phonenumber`, `password`, `gender`, `aboutme`, `profilepix`, `address`) VALUES ('$firstname', '$lastname', '$username', '$dob', '$email', '$phonenumber', '$password', '$gender', '$aboutme', 'NULLVAL', '$address')";

    //     if (mysqli_query($conn, $sql))
    //     {
    //         echo json_encode(array("statusCode"=>200, "User Created Successfully"));
    //     } else
    //     {

    //         echo json_encode(array("statusCode"=>201, "Enter the correct details"));
    //     }
    // }
    


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

        // mysqli_close($conn);
// }






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



// if(isset($_POST['register'])){
	

//     $dateOfBirth = $_POST['DOB'];
//     $today = date("Y-m-d");
//     $diff = date_diff(date_create($dateOfBirth), date_create($today));
    
//     if($diff->format('%y%') < 16){
//       die("you are too young to register");
//     }