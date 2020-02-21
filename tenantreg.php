<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="getbody p-5 m-5">
      
      <h1 class="text-center mb-3">REGISTER</h1>

      <form name="tenantreg" action="tenantreg.php" method="post" enctype="multipart/form-data">

        <fieldset  class="p-3 mt-5">
          <legend>Personal Information</legend>
      
        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required/>
          </div>

          <div class="col-md-6 col-sm-12">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username" required/>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Date Of Birth</label>
            <input type="date" class="form-control" name="dob" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Phone Number</label>
            <input type="email" class="form-control" name="email1" placeholder="Enter Phone Number" required/>
          </div>
        </div>


        <div class="row mb-4">
          <div class="col-md-6 col-sm-12">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required/>
          </div>
          <div class="col-md-6 col-sm-12">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password1" placeholder="Confirm Password" required/>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6 col-sm-12">
            <label>Gender</label>
            <select class="form-control" name="gender" required>
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
              <textarea class="form-control rounded-0" name="bio" rows="5" placeholder="" required></textarea>
            </div>
          </div>
        </div>
      </fieldset>
      </form>

</body>

</html>