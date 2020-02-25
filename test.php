<?php require "testvalidation.php" ?>
<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="getbody p-5 m-5">
      
          <h1 class="text-center mb-3">REGISTER</h1>

          <form name="landlordreg" action="test.php" method="post" enctype="multipart/form-data">

            <fieldset  class="p-3 mt-5">
              <legend>Personal Information</legend>
          
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name"/>*<?php echo $firstnameerror; ?>
              </div>

              <div class="col-md-6 col-sm-12">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"/>*<?php echo $lastnameerror; ?>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username"/>*<?php echo $usernameerror; ?>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" name="dob"/>*<?php echo $doberror; ?>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email"/>*<?php echo $emailerror; ?>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="email1" placeholder="Enter Phone Number"/>
              </div>
            </div>


            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password"/>*<?php echo $passworderror; ?>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password1" placeholder="Confirm Password"/>*<?php echo $passworderror; ?>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6 col-sm-12">
                <label>Gender</label>
                <select class="form-control" name="gender">
                  <option>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>

                <div class="form-group mt-3">
                  <label>Upload Profile Picture</label>
                  <input type="file" class="form-control-file" name="profile_pix">
                </div>
              </div>



              <div class="col-md-6 col-sm-12">
                <label>About Me</label>
                <div class="form-group">
                  <textarea class="form-control rounded-0" name="bio" rows="5" placeholder=""></textarea>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary text-secondary mt-4" name="submittest">Submit</button>
          </fieldset>
          </form>

          
    <?php
  

// if(!empty($_POST["firstname"]) &&!empty($_POST["lastname"]) && !empty($_POST["username"]) && !empty($_POST["dob"]) && !empty($_POST["email"]) && !empty($_POST["phonenumber"]) && !empty($_POST["password"]) && !empty($_POST["gender"]) && !empty($_POST["aboutme"]) && !empty($_POST["profilepix"])) {
echo "<h2>Your Submit Information</h2><br>";
echo "Firstname: {$_POST['firstname']}<br>";
echo "Lastname: {$_POST['lastname']}<br>";
echo "Date of Birth: {$_POST['dob']}<br>";
echo "Email: {$_POST['email']}<br>";
// echo "Password: {$_POST['password']}";
echo "Gender: {$_POST['gender']}<br>";
echo "About Me: {$_POST['aboutme']}<br>";
echo "Profile Pix: {$_POST['profilepix']}<br>";


echo $firstname;

// } else {

    
// }

  ?>
