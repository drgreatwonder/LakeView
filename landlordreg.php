<?php require "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="getbody p-5 m-5">
      
          <h1 class="text-center mb-3">REGISTER</h1>

          <form name="landlordreg" action="landlordreg.php" method="post" enctype="multipart/form-data">

            <fieldset  class="p-3 mt-5">
              <legend>Personal Information</legend>
          
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name"/>*
              </div>

              <div class="col-md-6 col-sm-12">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"/>*
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username"/>*
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" name="dob"/>*
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email"/>*
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Phone Number</label>
                <input type="email" class="form-control" name="phonenumber" placeholder="Enter Phone Number"/>*
              </div>
            </div>


            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Password</label>
                <input type="password" class="form-control" name="password1" placeholder="Password"/>*
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password" placeholder="Confirm Password"/>*
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
                </select>*
                <div class="form-group mt-3">
                  <label>Upload Profile Picture</label>
                  <input type="file" class="form-control-file" name="profilepix">
                </div>
              </div>



              <div class="col-md-6 col-sm-12">
                <label>About Me</label>
                <div class="form-group">
                  <textarea class="form-control rounded-0" name="aboutme" rows="5" placeholder="Tell a Bit About Yourself"></textarea>
                </div>
              </div>
            </div>
          </fieldset>
          </form>



          <form name="landlordreg" action="landlordreg.php" method="post" enctype="multipart/form-data">

          
                      <fieldset  class="p-3 mt-5">
                        <legend>Property Information</legend>
                        
      <div class="row">

            <div class="col-md-6 col-sm-12">

            <div class="mb-4">
              <label>Property Number</label>
              <input type="text" class="form-control" name="housenumber" placeholder="Enter Property Name"/>*
              </div>

              <div class="mb-4">
              <label>Street</label>
              <input type="text" class="form-control" name="street_name" placeholder="Enter Address"/>*
            </div>

              <!-- <div class="mb-4">
              <label>Address</label>
              <input type="text" class="form-control" name="street_name" placeholder="Enter Address" required/>
            </div> -->

            <div class="mb-4">
              <label>Year Built</label>
              <input type="date" class="form-control" name="buildyear"/>*
            </div>

            <div class="mb-4">
                <label>Property Type</label>
              <select class="form-control" name="housetype">
                <option>Take your pick</option>
                <option>Personal</option>
                <option>Commercial</option>
                <option>Undeveloped</option>
              </select>*
            </div>

              <label>Upload Profile Picture</label>
                <input type="file" class="form-control-file" name="housepix">

          </div>

      </div>

    
        <button type="submit" class="btn btn-primary text-secondary mt-5" name="getstarted" onclick="showLoginModal()">Submit</button>
    
          </form>
  </body>
</html>