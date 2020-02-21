<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="getbody p-5 m-5">
        <div class="container p-5">
          <h1 class="text-center mb-3">REGISTER YOUR VISITOR</h1>
      
          <form name="visitorsreg" class="m-5" action="visitorsreg.php" method="post" enctype="multipart/form-data">

            <fieldset  class="p-3 mt-5"> 
              <legend>Personal Information</legend>
            <div class="row">
      
            </div>
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
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Phone Number</label>
                <input type="email" class="form-control" name="email1" placeholder="Enter Phone Number" required/>
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
              </div>



              <div class="col-md-6 col-sm-12">
                <label>Host</label>
                <input type="email" class="form-control" name="email1" placeholder="Enter Your Full Name" required/>
              </div>
            </div>
      

            <button type="submit" class="btn btn-primary text-secondary" name="getstarted" onclick="showLoginModal()">Submit</button>
          </fieldset>

         

          </form>
  