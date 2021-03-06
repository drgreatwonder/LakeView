<?php
// require "dbconnection1.php";
require "header.php";
require "tenantregconfig.php";
require "session.php";
// require "formValidation.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="getbody p-5 m-5">
      
      <h1 class="text-center mb-3">REGISTER</h1>

      <form name="tenantreg" name= "tenantreg" id="my_form_id" action="tenantreg.php" method="post"  enctype="multipart/form-data">

      <?php 
      // echo display_error(); 
      ?>

        <fieldset  class="p-3 mt-5">
          <legend>Personal Information</legend>
      
        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>First Name</label><span class="error">*</span>
            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" id="firstname"/><span class="error" id="firstnameerror"><?php 
                 echo $fnerror
                ?></span>
          </div>

          <div class="col-md-6 col-sm-12">
            <label>Last Name</label><span class="error">*</span>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name"/><span class="error" id="lastnameerror"><?php 
                 echo $lnerror
                ?></span>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Username</label><span class="error">*</span>
            <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username" value="" id="username"/><span class="error" id="usernameerror"><?php 
                echo $unerror
                ?></span>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Date Of Birth</label><span class="error">*</span>
            <input type="date" class="form-control" name="dob" id="dob" min="1920-01-01" max="2020-02-25"/><span class="error" id="doberror"><?php 
                 echo $doberror
                ?></span>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Email address</label><span class="error">*</span>
            <input type="text" class="form-control" name="email" placeholder="Enter email" id="email"><span class="error" id="emailerror"><?php 
                 echo $emailerror
                ?></span>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Phone Number</label><span class="error">*</span>
            <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Enter Phone Number"/><span class="error" id="phonenumbererror"><?php 
                 echo $phonenumbererror
                ?></span>
          </div>
        </div>


        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Password</label><span class="error">*</span>
            <input type="password" class="form-control" name="initialpassword" placeholder="Password" id="initialpassword"/><span class="error" id="initialpassworderror"><?php 
                 echo $initialpassworderror
                ?></span>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Confirm Password</label><span class="error">*</span>
            <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password"/><span class="error" id="passworderror"><?php 
                 echo $passworderror
                ?></span>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6 col-sm-12">
            <label>Gender</label><span class="error">*</span>
            <select class="form-control" name="gender" id="gender">
              <option>Select</option>
              <option>Male</option>
              <option>Female</option>
              <option>Others</option>
            </select>
            <span class="error" id="gendererror"><?php 
                 echo $gendererror
                ?></span>
            
            <div class="form-group mt-3">
              <label>Upload Profile Picture</label>
              <input type="file" class="form-control-file" name="profilepix"><span class="error"><?php 
               echo $profilepixerror
                ?></span>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-12">
          <label>Address</label><span class="error">*</span>
          <input type="text" class="form-control" name="address" placeholder="Enter Your Address" id="address"/><span class="error" id="addresserror"><?php 
               echo $addresserror
                ?></span>
        </div>
        

          <div class="col-md-6 col-sm-12">
            <label>About Me</label>
            <div class="form-group">
              <textarea class="form-control rounded-0" name="aboutme" rows="5" placeholder="" id=""></textarea>
            </div>
          
          </div>
          <!-- <div class="col-md-6 col-sm-12">
            <label>Status</label><span class="error">*</span>
            <select class="form-control" name="role" id="userstatus">
              <option>Select</option>
              <option>User</option>
              <option>Admin</option>
              <option>Secretary</option>
            </select>
            <span class="error" id="gendererror"></span>
            
        </div> -->
        </div>
 
        <button type="submit" class="btn btn-primary text-secondary mt-4" name="submittenantreg">Submit</button>

        <div class="col-md-6 col-sm-12">
          <input type="hidden" class="form-control" name="userstatus" value="Inactive" placeholder="User Status" id="userstatus"/>
        </div>

        <!-- <input type="button"class="btn btn-primary text-secondary mt-4" name="submittenantreg" value="submit"> -->
<!--         
        <input type="submit" name="submittenantreg" class="btn align-middle btn-primary" value="submit"><a href="dashboard.php" class="p-3"></a> -->

      </fieldset>
      </form>

      <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script>

      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'index.php',
            data: $('form').serialize(),
            success: function () {
              console.log("Successful registration");
              
             <?php // echo "successful registration"; ?>
            }
          });

        });

      });

            
        </script> -->
    <script src="lakeviewValidation.js"></script>
</body>

</html>