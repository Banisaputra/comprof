<?php
include "header.php";
?>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/img/GKA_logo.png" alt="" width="50px"><span class="text-primary"> GKA</span> Raya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   

  <div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/bg_banner3.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form class="contact-form mt-5">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      </form>
    </div>
  </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-4 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-4 py-3">
          <h5>Contact</h5>
          <p class="footer">Drajidan - Sruni, Musuk, Boyolali Jawa Tengah</p>
          <p class="footer">0276-322937</p>
          <p class="footer">pt.grahakencanaadhiperkasaraya@gmail.com</p>
        </div>
        <div class="col-sm-6 col-lg-4 py-3">
            <h5>Social Media</h5>
            <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div>
      <hr>
      <p id="copyright">Copyright &copy; <script type="text/javascript">
        new Date().getFullYear()&&document.write(new Date().getFullYear());
     </script> | All right reserved GKA Corporation</p>
    </div>
  </footer>

<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="./assets/vendor/wow/wow.min.js"></script>
<script src="./assets/js/google-maps.js"></script>
<script src="./assets/js/theme.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>