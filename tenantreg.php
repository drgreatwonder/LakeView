<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Chidinma Esther Muoghalu">
  <meta name="description" content="this is a quiz web app for programmers">
  <meta name="keywords" content="quiz, HTML, CSS, JavaScript, PHP, MySQL, Frameworks">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JuoQuix</title>
  <link rel="icon" type="image/png" href="images/questions.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mainn.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="getbody">
  <div class="container p-5">
    <h1 class="text-center mb-3">REGISTER</h1>

    <form name="getstarted" action="" method="post" enctype="multipart/form-data">
      <div class="row">

      </div>
      <div class="row mb-3">
        <div class="col-md-6 col-sm-12">
          <label>First Name</label>
          <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required/>
        </div>

        <div class="col-md-6 col-sm-12">
          <label>Last Name</label>
          <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required/>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6 col-sm-12">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username" required/>
        </div>
        <div class="col-md-6 col-sm-12">
          <label>Date Of Birth</label>
          <input type="date" class="form-control" name="dob" required/>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6 col-sm-12">
          <label>Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
        </div>
        <div class="col-md-6 col-sm-12">
          <label>Confirm Email address</label>
          <input type="email" class="form-control" name="email1" placeholder="Enter email" required/>
        </div>
      </div>


      <div class="row mb-3">
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
          <label>Most Preferred Language</label>
          <select class="form-control" name="most_preferred_language" required>
            <option>Take your pick</option>
            <option>HTML</option>
            <option>CSS</option>
            <option>JavaScript</option>
            <option>MySQL</option>
            <option>PHP</option>
          </select>
          <div class="form-group p-3 mr-5 m-1">
            <label>Upload Profile Picture</label>
            <input type="file" class="form-control-file" name="profile_pix">
          </div>


          <button type="submit" class="btn btn-primary text-secondary" name="getstarted" onclick="showLoginModal()">Submit</button>

        </div>
        <div class="col-md-6 col-sm-12">
          <label>About Me</label>
          <div class="form-group">
            <textarea class="form-control rounded-0" name="bio" rows="5" placeholder="" required></textarea>
          </div>
        </div>
      </div>