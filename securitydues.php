<?php require "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="getbody p-5 m-5">
      
          <h1 class="text-center mb-3">Security Dues Payment</h1>

          <form name="securitydues" action="securitydues.php" method="post" enctype="multipart/form-data">

          
<fieldset  class="p-3 mt-5">
  <legend>Payment Information</legend>
  
<div class="row">

<div class="col-md-6 col-sm-12">

  <div class="mb-4">
  <label>Payment Date</label>
  <input type="date" class="form-control" name="payment_date"/>*
  </div>

<div class="mb-4">
<label>Amount</label>
<input type="text" class="form-control" name="amount" placeholder="Enter Property Name"/>*
</div>


<!-- <div class="mb-4">
<label>Street</label>
<input type="text" class="form-control" name="street_name" placeholder="Enter Address" required/>
</div> -->


<!-- <div class="mb-4">
<label>Amount</label>
<select class="form-control" name="housetype" required>
<option>Take your pick</option>
<option>Personal</option>
<option>Commercial</option>
<option>Undeveloped</option>
</select>
</div> -->

<!-- <label>Upload Profile Picture</label>
<input type="file" class="form-control-file" name="housepix"> -->

</div>

</div>


<button type="submit" class="btn btn-primary text-secondary mt-5" name="securitydues" onclick="showLoginModal()">Submit</button>

</form>














          </body>
</html>