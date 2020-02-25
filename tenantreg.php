<?php require "dbconnection1.php" ?>
<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="getbody p-5 m-5">
      
      <h1 class="text-center mb-3">REGISTER</h1>

      <form name="tenantreg" action="tenantreg.php" method="post"  enctype="multipart/form-data">

      <?php 
      // echo display_error(); 
      ?>

        <fieldset  class="p-3 mt-5">
          <legend>Personal Information</legend>
      
        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>First Name</label><span class="error">*</span>
            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" id="firstname"/><span class="error" id="firstnameerror"></span>
          </div>

          <div class="col-md-6 col-sm-12">
            <label>Last Name</label><span class="error">*</span>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name"/><span class="error" id="lastnameerror"></span>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Username</label><span class="error">*</span>
            <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username" value="" id="username"/><span class="error" id="usernameerror"></span>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Date Of Birth</label><span class="error">*</span>
            <input type="date" class="form-control" name="dob" id="dob" min="1920-01-01" max="2020-02-25"/><span class="error" id="doberror"></span>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Email address</label><span class="error">*</span>
            <input type="text" class="form-control" name="email" placeholder="Enter email" id="email"><span class="error" id="emailerror"></span>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Phone Number</label><span class="error">*</span>
            <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Enter Phone Number"/><span class="error" id="phonenumbererror"></span>
          </div>
        </div>


        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Password</label><span class="error">*</span>
            <input type="password" class="form-control" name="initialpassword" placeholder="Password" id="initialpassword"/><span class="error" id="initialpassworderror"></span>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Confirm Password</label><span class="error">*</span>
            <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password"/><span class="error" id="passworderror"></span>
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
            <span class="error" id="gendererror"></span>
            
            <div class="form-group mt-3">
              <label>Upload Profile Picture</label>
              <input type="file" class="form-control-file" name="profilepix">
            </div>
          </div>
          
          <div class="col-md-6 col-sm-12">
          <label>Address</label><span class="error">*</span>
          <input type="text" class="form-control" name="address" placeholder="Enter Your Address" id="address"/><span class="error" id="addresserror"></span>
        </div>


          <div class="col-md-6 col-sm-12">
            <label>About Me</label>
            <div class="form-group">
              <textarea class="form-control rounded-0" name="aboutme" rows="5" placeholder="" id=""></textarea>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary text-secondary mt-4" name="submittenantreg">Submit</button>
      </fieldset>
      </form>

    <script src="lakeviewValidation.js"></script>
</body>

</html>