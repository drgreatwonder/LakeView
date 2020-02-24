<?php require "formValidation.php" ?>
<?php require "header.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>



<body class="getbody p-5 m-5">
        <div class="container p-5">
          <h1 class="text-center mb-3">REGISTER YOUR VISITOR</h1>

          <?php
            //  if(!empty($_POST["firstname"])&&!empty($_POST["lastname"])&&!empty($_POST["email"])&&!empty($_POST["phonenumber"])&&!empty($_POST["gender"])&&!empty($_POST["host"])) {

              // if((preg_match("/^[A-Za-z. ]*$/", $firstname)==true)&&(preg_match("/^[A-Za-z. ]*$/", $lastname)==true)&&(preg_match("/^[A-Za-z. ]*$/", $email)==true)&&(preg_match("/^[A-Za-z. ]*$/", $phonenumber)==true)&&(preg_match("/^[A-Za-z. ]*$/", $gender)==true)&&(preg_match("/^[A-Za-z. ]*$/", $host)==true)) {

              // echo "{$_POST["firstname"]} <br>";
              // echo "{$_POST["lastname"]} <br>";
              // echo "{$_POST["email"]}<br>";
              // echo "{$_POST["phonenumber"]}<br>";
              // echo "{$_POST["gender"]}<br>";
              // echo "{$_POST["host"]}<br>";
              
          // } 
          // else{
          //   echo "<span class='error'>Please Fill in Your Details</span>";
          // }
        // } 
       
          
          ?>
  
      
          <form name="visitorsreg" class="m-5" action="visitorsreg.php" method="post" enctype="multipart/form-data">

            <fieldset  class="p-3 mt-5"> 
              <legend>Personal Information</legend>
            <div class="row">
      
            </div>
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name"/><span class="error">*<?php echo $firstnameError; ?></span>
              </div>
      
              <div class="col-md-6 col-sm-12">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"/><span class="error">*<?php echo $lastnameError; ?></span>
              </div>
            </div>
      
        
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email"/><span class="error">*<?php echo $emailError; ?></span>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" placeholder="Enter Phone Number"/><span class="error">*<?php echo $phonenumberError; ?> </span>
              </div>
            </div>
      
            <div class="row mb-3">
              <div class="col-md-6 col-sm-12">
                <!-- <label>Gender</label>
                <select class="form-control" name="gender">
                  <option>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>-->
                
                Gender
                <input class="radio" type="radio" Name="gender" value="Male">
                <input class="radio" type="radio" Name="gender" value="Female"><span class="error">*<?php echo $genderError; ?> </span> 

              </div>



              <div class="col-md-6 col-sm-12">
                <label>Host</label>
                <input type="text" class="form-control" name="host" placeholder="Enter Your Full Name"/><span class="error">*<?php echo $hostError; ?></span> 
              </div>
            </div>
      

            <button type="submit" class="btn btn-primary text-secondary" name="submitvisitorsreg" onclick="showLoginModal()">Submit</button>
          </fieldset>

         

          </form>
  