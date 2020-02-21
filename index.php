<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<body>

  <div class="">
  <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active h-75">
        <video class="video-fluid z-depth-1 video" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
        </video>

        <!-- <div class="text-holder"> -->
        <div class="videooverlay">
          <h1 style="text-align: center;">LAKEVIEW ESTATE</h1>
          <p>The best of the rest for all things everywhere. The best of the rest for all things everywhere. The best of the rest for all things everywhere. The best of the rest for all things everywhere. The best of the rest for all things everywhere.
            The best of the rest for aiolpyiolll things everywhere. </p>
          <a class="btn btn-info btn-lg align-middle" href="" role="button" data-toggle="modal" data-target="#elegantModalForm" id="modal">Get Started</a>


        </div>

        <!-- </div> -->
      </div>
    </div>
  </div>



  <h1 style="text-align: center;" class="pt-5">OUR ACTIVITIES </h1>
  <div class="container contain mb-5">
    <div class="card up">
      <div class="face face1">
        <div class="content">
          <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
          <h3>Design</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="card up">
      <div class="face face1">
        <div class="content">
          <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
          <h3>Code</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="card up">
      <div class="face face1">
        <div class="content">
          <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
          <h3>Launch</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>

  </div>

  <h1 style="text-align: center;" class="mt-5  pt-5" id="about">MEET THE EXECUTIVES</h1>
  <div class="container contain mt-3">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img_avatar.png" alt="Avatar">
        </div>
        <div class="flip-card-back">
          <h1>John Doe</h1>
          <p>Architect & Engineer</p>
          <p>We love that guy</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img_avatar.png" alt="Avatar">
        </div>
        <div class="flip-card-back">
          <h1>John Doe</h1>
          <p>Architect & Engineer</p>
          <p>We love that guy</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="img_avatar.png" alt="Avatar">
        </div>
        <div class="flip-card-back">
          <h1>John Doe</h1>
          <p>Architect & Engineer</p>
          <p>We love that guy</p>
        </div>
      </div>
    </div>

  </div>


  <div class="jumbotron jumbotron-fluid bg-dark value p-0 mt-5">
    <div class="opacity">
      <!-- <div class="container text-center"> -->
      <h5 class="display-4">BECOME AN INSTRUCTOR</h5>
      <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur porro, quae
        molestias
        vel consequuntur laborum soluta doloribus non alias sint, magni nam quaerat voluptas, natus
        fugiat
        autem? Praesentium, blanditiis maiores.</p>
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      <!-- </div> -->
    </div>
  </div>


  <div class="container col-md-6 justify-content-center mb-5" id="Contact Us">
    <!-- <h2 style="text-align: center;" class="pt-5">CONTACT US</h2> -->


    <form class=" border border-light" action="#!">
      <legend class="text-center p-3" id="contact">CONTACT US</legend>
      <fieldset>
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
        <div class="form-group">
          <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5" placeholder="Message"></textarea>
        </div>
        <button class="btn btn-info ml-auto" type="submit">Send</button>
      </fieldset>
    </form>
  </div>






  <?php require "footer.php" ?>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content form-elegant">
        <!--Header-->
        <div class="modal-header text-center">
          <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
          <div id="adminpage" class="row">

          </div>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body mx-4">
          <!--Body-->
          <form method="post" enctype="multipart/form-data">
            <div class="md-form mb-3 pb-3">
            <label data-error="wrong" data-success="right" for="Form-email1">Your Username</label>
              <input type="text" id="" name="username" class="form-control validate" required>
            </div>

            <div class="md-form pb-3">
              <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
              <input type="password" id="" name="password" class="form-control validate" required>
              <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="forgotpassword.php" class="blue-text ml-1">
                  Password?</a></p>
            </div>

            <div class="text-center mb-3">
              <input type="submit" name="btn" class="btn align-middle btn-primary" value="Login"><a href="dashboard.php" class="p-3"></a>
            </div>


            <div class="modal-footer mx-5 pt-3 mb-1">
              <p style="color: black">Not a member? SignUp As a</p>
            
                <a href="landlordreg.php">Landlord</a> or <a href="tenantreg.php">Tenant</a>
            </div>
</div>


            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>     -->

            <!-- <script src="asset/js/lakeview.js"></script> -->

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>