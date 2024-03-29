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
              <a class="nav-link active" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
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
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Blog</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <a href="#" class="post-thumb">
                    <img src="./assets/img/3 menara.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.php">Pembangunan Monumen Tiga Menara</a></h5>
                  <div class="site-info">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <a href="#" class="post-thumb">
                    <img src="./assets/img/3 menara.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.php">Pembangunan Monumen Tiga Menara</a></h5>
                  <div class="site-info">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <a href="#" class="post-thumb">
                    <img src="./assets/img/3 menara.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.php">Pembangunan Monumen Tiga Menara</a></h5>
                  <div class="site-info">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <a href="#" class="post-thumb">
                    <img src="./assets/img/3 menara.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.php">Pembangunan Monumen Tiga Menara</a></h5>
                  <div class="site-info">
                  </div>
                </div>
              </div>
            </div>
            

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        
      
    </div> <!-- .container -->
  </div> <!-- .page-section -->


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

<script src="./assets/js/theme.js"></script>
  
</body>
</html>