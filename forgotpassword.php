<?php require "header.php" ?>
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>


<form name="landlordreg" action="landlordreg.php" method="post" enctype="multipart/form-data" class="p-5 m-5 d-flex justify-content-center">

          
                      <fieldset  class="p-3 mt-5">
                        <legend><h3 class="text-center mt-5">Recover Password</h3></legend>


              <label class="text-center">Email Address</label>
              <input type="text" class="form-control" name="propertyname" placeholder="Enter Email" required/>
            
    
              <button type="submit" class="btn btn-primary text-secondary mt-5" name="getstarted" onclick="showLoginModal()">Submit</button>
    
          </form>