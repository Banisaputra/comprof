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

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">List of Countries without Coronavirus case</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-12">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="../assets/img/blog/blog_1.jpg" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">22 Jan, 2018</a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="#">8 Comments</a>
              </div>
            </div>
            <h2 class="post-title h1">List of Countries without Coronavirus case</h2>
            <div class="post-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.</p>

              <p>Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">LifeStyle</a>
              <a href="#" class="tag-link">Food</a>
              <a href="#" class="tag-link">Coronavirus</a>
            </div>
          </article> <!-- .blog-details -->

      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php
  include "footer.php";
  ?>
  <script src="./assets/js/jquery-3.5.1.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="./assets/vendor/wow/wow.min.js"></script>
  <script src="./assets/js/theme.js"></script>
  
</body>
</html>